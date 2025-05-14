<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Client;
use App\Models\Department;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientGesrestSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "All Protein",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 850 - SUMA Strip Mall"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Antídoto Café",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Ca. Enrique Palacios 427, Miraflores"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Coffee Point",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Av. Ruta Nro. 6 Otr. Malecon (a espaldas de calle Diego Palomino 1217)"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Coffee Point",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Ca. San Carlos Nº 280 - Morro Solar"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Coffee Shop 411",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Francisco Cabrera 411, Chiclayo"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Coffee Shop 411",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Malecón de la Marina 990 Miraflores"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Disfrutare",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Cruz del Chalpon 172. Urb. Latina"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Dpulpa",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Ca. los pinos 300 - Chiclayo"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "El Vizcaino Café-Bar",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Jr. José osores 339 - 4°piso - Chota"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Kango Café",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Elías Aguirre 561 - Chiclayo"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "La Casa de la Abuela Norma",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Avenida Lima N° 1285"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "My Finka",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Av. \"A\" con roberto segura - Jaén"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Oasis Cafe Pizzería",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Balta N° 006 - Chiclayo"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Panda Coffee",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Huamachuco 195. Urb. Cercado Lambayeque"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Sebastiani Café",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Alfredo Lapoint N° 834"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Vaes Café Bar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle 2 de Mayo 716 - Lambayeque"
            ],
            [
                "RUBRO" => "CALDOS DE GALLINA",
                "NOMBRE" => "Caldos Peter",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Cal. Manuel Arteaga Nro. 510 Urb. Los Libertadores"
            ],
            [
                "RUBRO" => "CALDOS DE GALLINA",
                "NOMBRE" => "Caldos Peter",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Balta 468 Segundo Piso"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Casa Club T&G",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Otr.Las Pampas Nro. S\/N Sec. San Isidro"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Casa Sipan",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Carretera Pomalca- Huaca Rajada Km. 28 - Cruce Pucalá."
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Casona del Campo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Mariscal Ramón Castilla 844 - Reque"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Resto Campestre La Pirámide",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Panamericana Norte-Frente a la Villa Buganvillas"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Los II Camarones",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Diego Ferré Sur 351 - Jayanca"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Periko´s Restaurant",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Urb. Mamape - Ferreñafe"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Don Diablo Grill & Drinks",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sta. Victoria 539 - Chiclayo"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Joshe Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 623 - Chiclayo"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Joshe Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Cal. Pacasmayo Nro. 125 Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "490 Restaurant & Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 1055 - Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "490 Restaurant & Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida Elvira García 490 - Chiclayo"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Marakos Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Elvira García y García 696 - Chiclayo"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Marakos Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Santa Victoria 470 - Chiclayo . Ref. Frente al óvalo Santa Victoria"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Marakos Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Fundo Nancolán, Túcume - Ref. Frente Museo de Túcume"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Marakos Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Grau 795, Pimentel"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Maukaian Bar&Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Venezuela 309 - Monsefú"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Mezza",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los dulantos 154"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Miura Restaurant & Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Francisco Bolognesi 1052 - Chiclayo"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Pacífico Pollos & Parrillas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Leandro Pastor 235 - Lambayeque"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Paseo de Antonio",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av. Benavides con Caminos del Inca- Parque de la amistad - Surco"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Qarbon ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida Grau 713 - Santa Victoria"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Rincón del Gordo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Casuarinas II Etapa Mz63 Lt5 - Tumán"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Sunquy",
                "DEPARTAMENTO" => "Ucayali",
                "DIRECCIÓN" => "Jr. Sargento Lores Mz. O Lote. 4 C.P. Villa Aguaytia (Frente a Notaria Bailon), Padre Abad"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa Beijing",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Emiliano Niño 361 - Chiclayo"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa China",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle 2 de Mayo 375 - Lambayeque"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa Dubai",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Virú 508 - La Victoria"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa Sabor & Fusión",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Zarumilla 079 - URb. Remigio Silva - Chiclayo"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa Shin Wang",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Alfredo Lapoint 847, Chiclayo"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa Soo Fun",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 475 - Chiclayo"
            ],
            [
                "RUBRO" => "CHIFAS",
                "NOMBRE" => "Chifa Ten Ku",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Los Pinos 298 - Santa Victoria"
            ],
            [
                "RUBRO" => "CUYES",
                "NOMBRE" => "El Parral",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Cal. Los Girasoles Nro. S\/N Sec. El Parral"
            ],
            [
                "RUBRO" => "CUYES",
                "NOMBRE" => "Recreo El Parral 2",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Ca. Inmaculada Concepción Nº S\/N Sector El Parral"
            ],
            [
                "RUBRO" => "CUYES",
                "NOMBRE" => "El Gordo Cuy",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Sarmiento 243 - Chiclayo"
            ],
            [
                "RUBRO" => "DARK KITCHEN",
                "NOMBRE" => "La Jama",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 880 - Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "Akafala Karaoke ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta 235 - Chiclayo"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "Bamboo Beach Club",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Rivera del Mar - Pimentel"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "Bass Disco",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Leonardo Ortiz 134 - Chiclayo"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "Cyra",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Chinchaysuyo 1317 - La Victoria"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "Gia Lounge",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Chinchaysuyo 1217 - La Victoria"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "La Esquina",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Juan Cuglievan 598 - Chiclayo"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "La Feria",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Carretera Pimentel km 5.5. Al frente de la USS"
            ],
            [
                "RUBRO" => "DISCOTECA",
                "NOMBRE" => "Stacion Disco",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Prol. Mariano Melga Nro. S\/N (Esquina con Av A)"
            ],
            [
                "RUBRO" => "HAMBURGUESAS",
                "NOMBRE" => "Joshe Burgers",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Cal. Pacasmayo Nro. 125 Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "HAMBURGUESAS",
                "NOMBRE" => "La Casa del Yogui",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Francisco Bolognesi 1095"
            ],
            [
                "RUBRO" => "HAMBURGUESAS",
                "NOMBRE" => "Las Musas Burger Point",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta - Ref. Esquina de Musas"
            ],
            [
                "RUBRO" => "HAMBURGUESAS",
                "NOMBRE" => "Mestizo Food",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Calle Coraceros 186 Pueblo Libre"
            ],
            [
                "RUBRO" => "HELADOS Y PALETAS",
                "NOMBRE" => "Heladería Pastelería Red Monkey",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sáenz Peña 2221 - JLO"
            ],
            [
                "RUBRO" => "HELADOS Y PALETAS",
                "NOMBRE" => "La Heladería de Arequipa",
                "DEPARTAMENTO" => "Arequipa",
                "DIRECCIÓN" => "Urb. Magisterial II Etapa Mz A Lote 11"
            ],
            [
                "RUBRO" => "HELADOS Y PALETAS",
                "NOMBRE" => "Mr Paleta",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Jacarandas 100 - Chiclayo"
            ],
            [
                "RUBRO" => "HELADOS Y PALETAS",
                "NOMBRE" => "Mr Paleta",
                "DEPARTAMENTO" => "Piura",
                "DIRECCIÓN" => "Av. Sánchez Cerro 234 - Piura"
            ],
            [
                "RUBRO" => "MAKIS",
                "NOMBRE" => "Asoka",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Gral. La Mar 115 - Chiclayo"
            ],
            [
                "RUBRO" => "MAKIS",
                "NOMBRE" => "Ghidorah Sushi Makis y Chifa",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Emiliano Niño 592"
            ],
            [
                "RUBRO" => "MAKIS",
                "NOMBRE" => "MakiCix",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Acacias 320 - Santa Victoria"
            ],
            [
                "RUBRO" => "MAKIS",
                "NOMBRE" => "MakiCix",
                "DEPARTAMENTO" => "San Martín",
                "DIRECCIÓN" => "Jirón Lamas 244 - Tarapoto"
            ],
            [
                "RUBRO" => "MAKIS",
                "NOMBRE" => "Trawa Sushi Restaurant",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "La Florida 900 - Chiclayo"
            ],
            [
                "RUBRO" => "PANADERÍAS",
                "NOMBRE" => "Don Benny",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta 406-492 - Chiclayo"
            ],
            [
                "RUBRO" => "PANADERÍAS",
                "NOMBRE" => "El Padrino",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Luis Gonzales 740 - Chiclayo"
            ],
            [
                "RUBRO" => "PANADERÍAS",
                "NOMBRE" => "Panadería Las Musas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta 054 - Chiclayo"
            ],
            [
                "RUBRO" => "PANADERÍAS",
                "NOMBRE" => "Pastelería Dulce Arte",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. 9 de Octubre N° 728"
            ],
            [
                "RUBRO" => "PANADERÍAS",
                "NOMBRE" => "Pastelería Heladería Dulce Arte",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. 9 de Octubre N° 207"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Ajo Macho",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José de San Martín Mz H Lt 36 Sector 9 - Pomalca"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Alex Barra Cevichera & Parrillera",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Augusto B. Leguía 101 - Lambayeque"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Brava Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Santa Victoria 657 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Brisa Marina",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Agustín Vallejos Zavala 304 - Las Brisas"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Cali Pachanguero",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Virú 588 - La Victoria - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Caserio Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 823 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Cerrito Norteño Familiar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "AV. GRAU NRO. 1186 URB. CAFE PERU SANTA VICTORIA"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Cerrito Norteño",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Piura 433 - PJ Jose Olaya"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Cerrito Norteño Al Paso",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Juan XXIII N° 370"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Cevichería La Negra Concha",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Santa Rosa 400. Esquina con Rio Chirinos. Urb Las Delicias"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Cevichería Tito",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prol. Emiliano Niño y - Lambayeque"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Che Tradicional",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Juan José Lora 156 Pj. San Francisco"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Choropampa",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prol. Pacasmayo 421, Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Don Juan Al Paso",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Santos Dumont con José Baquijano 206 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Don Juan La Plazuela",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Elías Aguirre 110 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Don Juan Santa Victoria",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 301 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Boñon Restaurante",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Jr. Luz Divina N° 204-Huacariz-Valle Hermoso"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Buen Sabor",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 446 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Camarón",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prolongacion Huamachuco 119 - Jayanca"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Criollazo",
                "DEPARTAMENTO" => "Arequipa",
                "DIRECCIÓN" => "Octavio Muñoz Najar 229 B - Cercado de Arequipa"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Estadio",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida el Tren 14 - Tumán"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Horno",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Prol. Manco Capac 128, Jaén"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Lambayecano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Juan XXIII 498"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Pez Loco",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Jirón Cruz de Piedra 631 - Cajamarca"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Portón Monsefuano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "José Olaya 528 - Monsefú"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Potrero Criollo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sta. Victoria 615 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Rinconcito Piurano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Zarumilla 178 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "El Rincón del Chato",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Mz B Lote 9 Sagrado Corazón de Jesús - Parque de la Mujer"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Embarcadero Azul",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle María Izaga 936 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Familia Gourmet",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Prolongación Bolognesi con Pedro Cieza de León"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "KM 16 Restaurante",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Car. Jaen-Chamaya KM. 16 Sec. Nuevo Horizonte"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "La Delicia",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Carretera Central KM 29.5 - Lurigancho Chosica"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "La Delicia",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Cal. Jose Salas Nro. 106 - Magdalena del Mar"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "La Delicia",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av. Circunvalación del Golf Los Incas 370, Surco, Lima 3"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "La Tía Lola",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Cal. el Parral Lote. C Sec. el Parral"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Mercado Chiclayano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Amaru Inca Yupanqui 480 -La Victoria"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Morrop Muchik Cuisine",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "SUMA Strip Mall"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Pacífico Restaurant Gourmet",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Huamachuco 970"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Prospero Taberna Gastronomica ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Pinos 348 - Santa Victoria"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Pikea",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida Grau 713 - Santa Victoria"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Que tal Richi",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Las Piletas #320. Urb. Villarreal - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Raíces Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Guabos 201 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Sabores Peruanos",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Los Incas 136, La Victoria"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Sazón de los Reyes",
                "DEPARTAMENTO" => "Ancash",
                "DIRECCIÓN" => "Carretera Central 542 frente al Estadio de Carhuaz"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "SIPAN CAFE AND BAR",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av. del Ejécito Nro. 977 Urb. Santa Cruz - Miraflores"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "SOMAR Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prolongación Libertad - Puerto Eten"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Ta' Bravo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Faiques 598 - Chiclayo"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Umbral",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Jirón Batalla de Ayacucho 384-A, Santiago de Surco - Lima"
            ],
            [
                "RUBRO" => "COMIDA PERUANA",
                "NOMBRE" => "Vichayo Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Álamos 230 - Chiclayo"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizza Mora",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Calle San Carlos Cdr3. Frente Parque Héroes del Cenepa"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizzería Tito",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prol. Emiliano Niño - Lambayeque"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizzería Venecia",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta 365 - Chiclayo"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizzería Venecia",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sta. Victoria 456 - Chiclayo"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Toscana Trattoria & Pizzería",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Los Pinos 322 - Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Avelino Chicken Place",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "SUMA Strip Mall"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Charol Brasas & Grill",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av Santiago Antúnez de Mayolo 1101 - Los Olivos"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "El Cilindrero Pollos y Carnes al Cilindro",
                "DEPARTAMENTO" => "Moquegua",
                "DIRECCIÓN" => "Nuevo Ilo MZ 46 lLte 14- Ilo - Moquegua"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Mr Rico",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. 9 de Octubre Mz C Lote 5 PP.JJ. Baca Burga"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Mr Rico",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Bernabe Cobos 121 - PJ 9 de Octubre - Chiclayo"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pacífico Pollos & Parrillas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Leandro Pastor 235, Lambayeque"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería El Tizón Rojo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Huamachuco 213, Jayanca"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Mi Warique ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Cal. Diego Ferre Nro. 0297 Urb. Centro de Jayanca"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Mi Warique ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Garcilazo 498 PJ San Martin"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Mi Warique ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Federico Villarreal 229 - Túcume"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Mi Warique ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Monsalve Baca Nº 385 - Urb. Proceres de la Independencia"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Golden Brasas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Cal. Vicente De La Vega Nro. 1399"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Golden Brasas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Pedro Ruiz Nro. 1511"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Golden Brasas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida Los Incas 783 - La Victoria"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "5to Pescado",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los parques, Federico Villareal 324"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "JM Diamond",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "AV. General Manuel Vivanco Nro. 717 Urb. Isla Verde"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Barbol",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 850 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Capitán Ceviche Restobar",
                "DEPARTAMENTO" => "La Libertad",
                "DIRECCIÓN" => "Carretera Industrial 465 - 469 Urbanización La Encalada - Trujillo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "CARDI Rooftop",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av Libertad #715 Urb. Villarreal - Santa Victoria"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Catrina",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 525 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Don Demonio",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Dulantos 110 - Santa victoria - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "El Taller",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Dulantos 170 - Santa victoria - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Emir Restobar",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av. Caminos del Inca 22 Santiago de Surco"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Estación Rock",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sta. Victoria 688 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Etnia Lounge Restobar",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Calle San Carlos N° 280"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Fama Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prol. Av. Francisco Bolognesi - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Hacienda Rustica Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Bolognesi N° 206 - .Jayanca"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Hermanos Kamt Resto & Bar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta 50, Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "King Monkey",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 231 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "LYO",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prolongacion Los Incas N. 114 - La Victoria"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Lumbra Lounge VIP",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 1055 - 3er Piso - Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "OHANA Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Ribera del Mar"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Pisco & Ají Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sta. Victoria 688 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "PRAIA Restaurante & Lounge",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Manuel Seoane 916 - Pimentel"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Quattro Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Manzanos 180 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Serena VistaBar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Santa Victoria 479 - Urb. Santa Victoria"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "STACION XXI",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Cal. Carlos Aldana Camacho Nro. 535 P.J. Santa Ana"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Tavos Karoake Disco",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 385 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Tiki Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad N° 872 - Urbanización Federico Villarreal"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Wallpa Restobar",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av San Luis S\/N - Cuadra 24 Centro Naval de San Borja - Lima. Ref. Frente a Tottus"
            ],
            [
                "RUBRO" => "RESTOGAMER",
                "NOMBRE" => "Arcade Gamer Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle La Florida 310 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOGAMER",
                "NOMBRE" => "D'Chill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle La Florida 440 - Chiclayo"
            ]
        ];

        Type::where('product_id', 1)->each(function ($type) {
            $clients = Client::where('type_id', $type->id)->get();

            foreach ($clients as $client) {
                Address::where('client_id', $client->id)->delete();
                $client->delete();
            }
        });

        foreach ($data as $client) {
            $clientFound = Client::where('nombre', $client['NOMBRE'])->first();

            if (!$clientFound) {
                $tipo = Type::where('name', $client['RUBRO'])->first();

                if (!$tipo) {
                    $tipo = Type::create([
                        'name' => $client['RUBRO'],
                        'product_id' => 1,
                    ]);
                }

                $clientFound = Client::create([
                    'nombre' => $client['NOMBRE'],
                    'active' => 1,
                    'logo' => 'placeholder.svg',
                    'type_id' => $tipo->id,
                ]);
            }

            if (isset($client['DIRECCIÓN'])) {
                $department = Department::where('name', 'like', '%' . $client['DEPARTAMENTO'] . '%')->first();
                Address::create([
                    'address' => $client['DIRECCIÓN'],
                    'department_id' => $department->id,
                    'client_id' => $clientFound->id,
                ]);
            }
        }


    }
}
