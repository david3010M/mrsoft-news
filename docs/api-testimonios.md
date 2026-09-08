# API de Testimonios — Guía para Frontend

Documentación de las APIs públicas de **Testimonios** y sus **Tags**.
Probada contra el entorno local el 2026-09-08.

---

## 1. Información general

| Concepto | Valor |
|---|---|
| Base URL (local) | `http://mrsoft-news.test` |
| Prefijo | `/api` |
| Autenticación | **No requiere** (endpoints públicos) |
| Formato | JSON |
| Método | Solo `GET` (lectura) |

### Header obligatorio

Enviar **siempre**:

```
Accept: application/json
```

> Si se omite, Laravel devuelve páginas de error en **HTML** (404, 500…) en vez de JSON.
> Con `fetch` / `axios` normalmente ya se envía, pero conviene forzarlo.

Ejemplo con `axios`:

```js
const api = axios.create({
  baseURL: 'http://mrsoft-news.test/api',
  headers: { Accept: 'application/json' },
});
```

---

## 2. Endpoints

### 2.1. Listar testimonios

```
GET /api/testimonio
```

Devuelve **solo testimonios activos**, ordenados por:
1. Destacados primero (`destacado` desc)
2. Más recientes primero (`created_at` desc)

#### Query params

| Param | Tipo | Requerido | Descripción |
|---|---|---|---|
| `product_id` | integer | **Sí** | ID del producto. Debe existir en `products`. |
| `destacado` | boolean | No | Filtra solo destacados. **Usar `1` / `0`** (no `true` / `false`). |
| `tag_id` | integer | No | Filtra testimonios que tengan ese tag. Debe existir en `tag_testimonios`. |
| `limit` | integer ≥ 1 | No | Máximo de resultados. |

> ⚠️ **`destacado`**: solo acepta `1`, `0`, `"1"`, `"0"`.
> `?destacado=true` devuelve **422 `validation.boolean`**.
> Para "no destacados" usar `?destacado=0`; para "todos" no enviar el parámetro.

#### Ejemplos

```bash
# Todos los testimonios del producto 1 (Gesrest)
curl -H "Accept: application/json" \
  "http://mrsoft-news.test/api/testimonio?product_id=1"

# Solo destacados, máximo 6
curl -H "Accept: application/json" \
  "http://mrsoft-news.test/api/testimonio?product_id=1&destacado=1&limit=6"

# Del producto 1 y con el tag 1
curl -H "Accept: application/json" \
  "http://mrsoft-news.test/api/testimonio?product_id=1&tag_id=1"
```

#### Respuesta `200` — array de testimonios

```json
[
  {
    "id": 3,
    "titulo": "asdasdasd",
    "descripcion": "asdasdas",
    "destacado": false,
    "url": "https://www.youtube.com/shorts/abc123",
    "cliente": {
      "id": 54,
      "nombre": "490 Restaurant & Grill",
      "logo": "http://mrsoft-news.test/storage/placeholder.svg",
      "type": "CARNES Y PARRILLAS"
    },
    "producto": "Gesrest",
    "tags": [
      { "id": 1, "nombre": "Motivo 1" },
      { "id": 4, "nombre": "asdasd" }
    ]
  }
]
```

Si no hay resultados: `200` con `[]`.

---

### 2.2. Obtener un testimonio por ID

```
GET /api/testimonio/{id}
```

#### Ejemplo

```bash
curl -H "Accept: application/json" \
  "http://mrsoft-news.test/api/testimonio/2"
```

#### Respuesta `200` — objeto testimonio

```json
{
  "id": 2,
  "titulo": "titulo 1",
  "descripcion": "descripcion prueba",
  "destacado": false,
  "url": "https://www.youtube.com/shorts/abc123",
  "cliente": {
    "id": 54,
    "nombre": "490 Restaurant & Grill",
    "logo": "http://mrsoft-news.test/storage/placeholder.svg",
    "type": "CARNES Y PARRILLAS"
  },
  "producto": "Gesrest",
  "tags": [
    { "id": 5, "nombre": "tag2" }
  ]
}
```

> `cliente` puede ser `null` si el testimonio se guardó sin cliente asociado.

---

### 2.3. Listar tags de testimonios

```
GET /api/testimonio-tag
```

Devuelve **todos los tags**, ordenados alfabéticamente por `nombre`.
Los tags **ya no dependen del producto** — es una lista global.
Úsalo para poblar el filtro `tag_id` del listado de testimonios.

#### Query params

| Param | Tipo | Requerido | Descripción |
|---|---|---|---|
| `limit` | integer ≥ 1 | No | Máximo de resultados. |

#### Ejemplo

```bash
curl -H "Accept: application/json" \
  "http://mrsoft-news.test/api/testimonio-tag"
```

#### Respuesta `200` — array de tags

```json
[
  { "id": 3, "nombre": "adsssssssss" },
  { "id": 2, "nombre": "asdas" },
  { "id": 1, "nombre": "Motivo 1" },
  { "id": 5, "nombre": "tag2" }
]
```

---

### 2.4. Obtener un tag por ID

```
GET /api/testimonio-tag/{id}
```

#### Ejemplo

```bash
curl -H "Accept: application/json" \
  "http://mrsoft-news.test/api/testimonio-tag/1"
```

#### Respuesta `200`

```json
{ "id": 1, "nombre": "Motivo 1" }
```

---

## 3. Esquemas de datos

### Testimonio

| Campo | Tipo | Notas |
|---|---|---|
| `id` | integer | |
| `titulo` | string | |
| `descripcion` | string \| null | |
| `destacado` | boolean | |
| `url` | string | URL del video/enlace |
| `cliente` | objeto \| null | Ver **Cliente** |
| `producto` | string | Nombre del producto (no el ID) |
| `tags` | array | Lista de **Tag** |

### Cliente (dentro de `cliente`)

| Campo | Tipo |
|---|---|
| `id` | integer |
| `nombre` | string |
| `logo` | string (URL) |
| `type` | string (nombre del rubro/tipo) |

### Tag

| Campo | Tipo |
|---|---|
| `id` | integer |
| `nombre` | string |

---

## 4. Manejo de errores

### 422 — Error de validación

Cuando un query param no cumple las reglas. El cuerpo trae **una sola** clave de error de Laravel (sin traducir):

```json
{ "message": "validation.required" }
```

| Mensaje | Causa |
|---|---|
| `validation.required` | Falta `product_id` en `/api/testimonio`. |
| `validation.integer` | Un parámetro numérico no es entero. |
| `validation.boolean` | `destacado` no es `1`/`0`. |
| `validation.exists` | `product_id` o `tag_id` no existe en la BD. |
| `validation.min` | `limit` menor que 1. |

> El frontend debe mostrar mensajes propios; estos strings no son texto final para el usuario.

### 404 — No encontrado

`GET /api/testimonio/{id}` o `/api/testimonio-tag/{id}` con un ID inexistente:

```json
{ "message": "No query results for model [App\\Models\\Testimonio] 99999" }
```

(Solo devuelve JSON si se envió el header `Accept: application/json`.)

---

## 5. Recetas de uso en frontend

### Página de testimonios de un producto

```js
// 1. Cargar los tags para el filtro (una vez)
const { data: tags } = await api.get('/testimonio-tag');

// 2. Listar testimonios del producto, opcionalmente filtrados
async function loadTestimonios({ productId, tagId, soloDestacados, limit }) {
  const params = { product_id: productId };
  if (tagId) params.tag_id = tagId;
  if (soloDestacados) params.destacado = 1;
  if (limit) params.limit = limit;

  const { data } = await api.get('/testimonio', { params });
  return data;
}
```

### Carrusel de destacados en el home

```js
const { data } = await api.get('/testimonio', {
  params: { product_id: productId, destacado: 1, limit: 8 },
});
```

---

## 6. Referencia rápida

| Método | Ruta | Descripción |
|---|---|---|
| GET | `/api/testimonio?product_id=` | Lista testimonios activos de un producto |
| GET | `/api/testimonio/{id}` | Un testimonio |
| GET | `/api/testimonio-tag` | Lista global de tags |
| GET | `/api/testimonio-tag/{id}` | Un tag |

Documentación OpenAPI/Swagger del proyecto: `http://mrsoft-news.test/api/documentation`
