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
                "DEPARTAMENTO" => "Cajamarca"
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
                "DIRECCIÓN" => "Malecón de la Marina 990  Miraflores"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "Datito Café",
                "DEPARTAMENTO" => "Lambayeque"
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
                "NOMBRE" => "Misha Coffee Lab",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "CAFETERÍA",
                "NOMBRE" => "My Finka",
                "DEPARTAMENTO" => "Cajamarca"
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
                "DIRECCIÓN" => "Av. Huamachuco 195. Urb. Cercado Lambayeque "
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
                "DIRECCIÓN" => "La Gloria 510 - Chiclayo"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Casa Club T&G",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "CAMPESTRE",
                "NOMBRE" => "Casa Sipan",
                "DEPARTAMENTO" => "Lambayeque"
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
                "DEPARTAMENTO" => "Lambayeque"
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
                "DIRECCIÓN" => "Av. Sta. Victoria 539 - Chiclayo "
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Joshe Grill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 623 - Chiclayo"
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Marakos 490 ",
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
                "DIRECCIÓN" => "Venezuela 309 - Monsefú "
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
                "DIRECCIÓN" => "Av. Francisco Bolognesi 1052 - Chiclayo "
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
                "DIRECCIÓN" => "Av. Benavides con Caminos del Inca- Parque de la amistad - Surco "
            ],
            [
                "RUBRO" => "CARNES Y PARRILLAS",
                "NOMBRE" => "Qarbon ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida Grau 713 - Santa Victoria "
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
                "DIRECCIÓN" => "Virú 508 - La Victoria "
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
                "DEPARTAMENTO" => "Lambayeque"
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
                "DIRECCIÓN" => "Calle Inmaculada Concepción S\/N Sector El Parral"
            ],
            [
                "RUBRO" => "CUYES",
                "NOMBRE" => "El Parral 2",
                "DEPARTAMENTO" => "Cajamarca"
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
                "DIRECCIÓN" => "Av. Chinchaysuyo 1317 - La Victoria "
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
                "DEPARTAMENTO" => "Cajamarca"
            ],
            [
                "RUBRO" => "HAMBURGUESAS",
                "NOMBRE" => "Joshe Burgers",
                "DEPARTAMENTO" => "Lambayeque"
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
                "NOMBRE" => "Pastelería Heladería Dulce Arte",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. 9 de Octubre N° 207"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Ajo Macho",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José de San Martín Mz H Lt 36 Sector 9 - Pomalca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Alex Barra Cevichera & Parrillera",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Augusto B. Leguía 101 - Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Bar & Loche",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Faiques 164 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Brava Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Santa Victoria 657 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Brisa Marina",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Agustín Vallejos Zavala 304 - Las Brisas"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Cali Pachanguero",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Virú 588 - La Victoria - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Caserio Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau 823 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Cerrito Norteño Familiar",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Cerrito Norteño",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Grau Nro. 1186 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Cerrito Norteño Al Paso",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Juan XXIII N° 370"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Cevichería La Negra Concha",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle Santa Rosa 400. Esquina con Rio Chirinos. Urb Las Delicias"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Cevichería Tito",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prol. Emiliano Niño y - Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Che Tradicional",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Juan José Lora 156 Pj. San Francisco"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Choropampa",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Don Juan Al Paso",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Santos Dumont con José Baquijano 206 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Don Juan La Plazuela",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Elías Aguirre 110 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Don Juan Santa Victoria",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 301 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Doña Rosa Restaurante",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Boñon Restaurante",
                "DEPARTAMENTO" => "Cajamarca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Buen Sabor",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => " Av. Grau 446 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Camarón",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prolongacion Huamachuco 119 - Jayanca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Criollazo",
                "DEPARTAMENTO" => "Arequipa",
                "DIRECCIÓN" => "Octavio Muñoz Najar 229 B - Cercado de Arequipa"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Estadio",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida el Tren 14 - Tumán"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Horno",
                "DEPARTAMENTO" => "Cajamarca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Lambayecano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => " Juan XXIII 498"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Pez Loco",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => " Jirón Cruz de Piedra 631 - Cajamarca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Portón Monsefuano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "José Olaya 528 - Monsefú "
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Potrero Criollo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => " Av. Sta. Victoria 615 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Rinconcito Piurano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Zarumilla 178 - Chiclayo "
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "El Rincón del Chato",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Mz B Lote 9 Sagrado Corazón de Jesús - Parque de la Mujer"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Embarcadero Azul",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle María Izaga 936 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Familia Gourmet",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Prolongación Bolognesi con Pedro Cieza de León"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "KM 16 Restaurante",
                "DEPARTAMENTO" => "Cajamarca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "La Delicia",
                "DEPARTAMENTO" => "Lima"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "La Tía Lola",
                "DEPARTAMENTO" => "Cajamarca"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Martina",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Mercado Chiclayano",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Amaru Inca Yupanqui 480 -La Victoria "
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Mi China",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => " Av. Las Américas 174 - Chiclayo "
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Morrop Muchik Cuisine",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "SUMA Strip Mall"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Pacífico Restaurant Gourmet",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Huamachuco 970 "
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Prospero Taberna Gastronomica ",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Pinos 348 - Santa Victoria"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Pikea",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Avenida Grau 713 - Santa Victoria "
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Que tal Richi",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Las Piletas #320. Urb. Villarreal - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Raíces Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Guabos 201 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Sabores Peruanos",
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Sazón de los Reyes",
                "DEPARTAMENTO" => "Ancash",
                "DIRECCIÓN" => "Carretera Central 542 frente al Estadio de Carhuaz"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Sipán Gastrobar",
                "DEPARTAMENTO" => "Lima"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "SOMAR Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prolongación Libertad - Puerto Eten"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Ta' Bravo",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Faiques 598 - Chiclayo"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Umbral",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Jirón Batalla de Ayacucho 384-A, Santiago de Surco - Lima"
            ],
            [
                "RUBRO" => "PERUANA ( COMIDA PERUANA )",
                "NOMBRE" => "Vichayo Restobar",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Álamos 230 - Chiclayo"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizza Mora",
                "DEPARTAMENTO" => "Cajamarca",
                "DIRECCIÓN" => "Calle San Carlos Cdr3. Frente Parque Héroes del Cenepa "
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizzería Tito",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Prol. Emiliano Niño - Lambayeque"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizzería Venecia Balta",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. José Balta 365 - Chiclayo"
            ],
            [
                "RUBRO" => "PIZZAS",
                "NOMBRE" => "Pizzería Venecia Santa Victoria",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Sta. Victoria 456 - Chiclayo"
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
                "DIRECCIÓN" => "Av. 9 de Octubre Mz C Lote 5  PP.JJ. Baca Burga"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Mr Rico 2",
                "DEPARTAMENTO" => "Lambayeque"
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
                "DIRECCIÓN" => "Garcilaso de la Vega 498, Lambayeque"
            ],
            [
                "RUBRO" => "POLLERÍAS",
                "NOMBRE" => "Pollería Golden Brasas",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los Incas 783 - La Victoria"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "5to Pescado",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Los parques, Federico Villareal 324 - La Victoria "
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Ayanti Restobar",
                "DEPARTAMENTO" => "Lima",
                "DIRECCIÓN" => "Av. Gral. Manuel I. Vivanco 717, Pueblo Libre"
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
                "NOMBRE" => "D´Leches",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Esquina 9 de Setiembre y Prolongación Bolognesi"
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
                "DIRECCIÓN" => "Calle San Carlos N° 280 "
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
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "King Monkey",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Av. Libertad 231 - Chiclayo"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Leches Restaurante",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Esquina de Av. Bolognesi con Av. Cieza de León"
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
                "DEPARTAMENTO" => "Lambayeque"
            ],
            [
                "RUBRO" => "RESTOBARES",
                "NOMBRE" => "Mulata ",
                "DEPARTAMENTO" => "Lambayeque"
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
                "DIRECCIÓN" => " Av. Sta. Victoria 688 - Chiclayo"
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
                "DEPARTAMENTO" => "Lambayeque"
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
                "DIRECCIÓN" => "Calle La Florida 310 - Chiclayo "
            ],
            [
                "RUBRO" => "RESTOGAMER",
                "NOMBRE" => "D'Chill",
                "DEPARTAMENTO" => "Lambayeque",
                "DIRECCIÓN" => "Calle La Florida 440 - Chiclayo"
            ]
        ];

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
