<?php

use Illuminate\Database\Seeder;

class LocationLatlngTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_latlng')->delete();
        
        \DB::table('location_latlng')->insert(array (
            0 => 
            array (
                'code' => 51001,
                'name' => 'Augusta',
                'latlng' => '-34.293246,115.139245',
            ),
            1 => 
            array (
                'code' => 51002,
                'name' => 'Busselton',
                'latlng' => '-33.6554927,115.3500188',
            ),
            2 => 
            array (
                'code' => 51003,
                'name' => 'Busselton Region',
                'latlng' => '-33.6554927,115.3500188',
            ),
            3 => 
            array (
                'code' => 51004,
                'name' => 'Margaret River',
                'latlng' => '-33.955,115.075',
            ),
            4 => 
            array (
                'code' => 51005,
                'name' => 'Australind - Leschenault',
                'latlng' => '-33.2354892,115.7236322',
            ),
            5 => 
            array (
                'code' => 51006,
                'name' => 'Bunbury',
                'latlng' => '-33.325636,115.6396494',
            ),
            6 => 
            array (
                'code' => 51007,
                'name' => 'Capel',
                'latlng' => '-33.5570685,115.5696196',
            ),
            7 => 
            array (
                'code' => 51008,
                'name' => 'College Grove - Carey Park',
                'latlng' => '-33.3553739,115.6330538',
            ),
            8 => 
            array (
                'code' => 51009,
                'name' => 'Collie',
                'latlng' => '-33.3601435,116.1484349',
            ),
            9 => 
            array (
                'code' => 51010,
                'name' => 'Dardanup',
                'latlng' => '-33.4047442,115.7723119',
            ),
            10 => 
            array (
                'code' => 51011,
                'name' => 'Davenport',
                'latlng' => '-33.361778,115.6758053',
            ),
            11 => 
            array (
                'code' => 51012,
                'name' => 'Eaton - Pelican Point',
                'latlng' => '-33.3119903,115.7008588',
            ),
            12 => 
            array (
                'code' => 51013,
                'name' => 'Gelorup - Dalyellup - Stratham',
                'latlng' => '-33.4207036,115.6295968',
            ),
            13 => 
            array (
                'code' => 51014,
                'name' => 'Harvey',
                'latlng' => '-33.0786638,115.915262',
            ),
            14 => 
            array (
                'code' => 51015,
                'name' => 'Koombana',
                'latlng' => '-33.3213351,115.6452911',
            ),
            15 => 
            array (
                'code' => 51016,
                'name' => 'Waroona',
                'latlng' => '-32.8409199,115.9303855',
            ),
            16 => 
            array (
                'code' => 51017,
                'name' => 'Bridgetown - Boyup Brook',
                'latlng' => '-33.834,116.388',
            ),
            17 => 
            array (
                'code' => 51018,
                'name' => 'Donnybrook - Balingup',
                'latlng' => '-33.6608927,115.9467997',
            ),
            18 => 
            array (
                'code' => 51019,
                'name' => 'Manjimup',
                'latlng' => '-34.2455371,116.1442778',
            ),
            19 => 
            array (
                'code' => 51020,
                'name' => 'Pemberton',
                'latlng' => '-34.44,116.05',
            ),
            20 => 
            array (
                'code' => 51021,
                'name' => 'Dawesville - Bouvard',
                'latlng' => '-32.6333844,115.6335482',
            ),
            21 => 
            array (
                'code' => 51022,
                'name' => 'Falcon - Wannanup',
                'latlng' => '-32.607963,115.645327',
            ),
            22 => 
            array (
                'code' => 51023,
                'name' => 'Greenfields',
                'latlng' => '-32.53,115.755',
            ),
            23 => 
            array (
                'code' => 51024,
                'name' => 'Halls Head - Erskine',
                'latlng' => '-32.5558615,115.6970752',
            ),
            24 => 
            array (
                'code' => 51025,
                'name' => 'Mandurah',
                'latlng' => '-32.5361038,115.7424077',
            ),
            25 => 
            array (
                'code' => 51026,
                'name' => 'Mandurah - East',
                'latlng' => '-32.5361038,115.7424077',
            ),
            26 => 
            array (
                'code' => 51027,
                'name' => 'Mandurah - North',
                'latlng' => '-32.52304,115.727604',
            ),
            27 => 
            array (
                'code' => 51028,
                'name' => 'Mandurah - South',
                'latlng' => '-32.529,115.723',
            ),
            28 => 
            array (
                'code' => 51029,
                'name' => 'Pinjarra',
                'latlng' => '-32.6172284,115.877112',
            ),
            29 => 
            array (
                'code' => 51030,
                'name' => 'City Beach',
                'latlng' => '-31.935080, 115.754631',
            ),
            30 => 
            array (
                'code' => 51031,
            'name' => 'Claremont (WA)',
                'latlng' => '-31.98,115.782',
            ),
            31 => 
            array (
                'code' => 51032,
                'name' => 'Cottesloe',
                'latlng' => '-31.993,115.757',
            ),
            32 => 
            array (
                'code' => 51033,
                'name' => 'Floreat',
                'latlng' => '-31.938,115.794',
            ),
            33 => 
            array (
                'code' => 51034,
                'name' => 'Mosman Park - Peppermint Grove',
                'latlng' => '-31.999,115.768',
            ),
            34 => 
            array (
                'code' => 51035,
                'name' => 'Nedlands - Dalkeith - Crawley',
                'latlng' => '-31.9817738,115.8026262',
            ),
            35 => 
            array (
                'code' => 51036,
                'name' => 'Swanbourne - Mount Claremont',
                'latlng' => '-31.9829741,115.7766568',
            ),
            36 => 
            array (
                'code' => 51037,
            'name' => 'Kings Park (WA)',
                'latlng' => '-31.9609106,115.8321929',
            ),
            37 => 
            array (
                'code' => 51038,
                'name' => 'Mount Hawthorn - Leederville',
                'latlng' => '-31.9236304,115.8441587',
            ),
            38 => 
            array (
                'code' => 51039,
                'name' => 'Mount Lawley - Inglewood',
                'latlng' => '-31.9189769,115.8761126',
            ),
            39 => 
            array (
                'code' => 51040,
                'name' => 'North Perth',
                'latlng' => '-31.928,115.853',
            ),
            40 => 
            array (
                'code' => 51041,
                'name' => 'Perth City',
                'latlng' => '-31.9505269,115.8604572',
            ),
            41 => 
            array (
                'code' => 51042,
                'name' => 'Subiaco - Shenton Park',
                'latlng' => '-31.959,115.806',
            ),
            42 => 
            array (
                'code' => 51043,
                'name' => 'Wembley - West Leederville - Glendalough',
                'latlng' => '-31.9464011,115.8175501',
            ),
            43 => 
            array (
                'code' => 51044,
                'name' => 'Bassendean - Eden Hill - Ashfield',
                'latlng' => '-31.9217303,115.9392274',
            ),
            44 => 
            array (
                'code' => 51045,
                'name' => 'Bayswater - Embleton - Bedford',
                'latlng' => '-31.8990972,115.917369',
            ),
            45 => 
            array (
                'code' => 51046,
                'name' => 'Maylands',
                'latlng' => '-31.931,115.899',
            ),
            46 => 
            array (
                'code' => 51047,
                'name' => 'Morley',
                'latlng' => '-31.887,115.907',
            ),
            47 => 
            array (
                'code' => 51048,
                'name' => 'Noranda',
                'latlng' => '-31.875,115.889',
            ),
            48 => 
            array (
                'code' => 51049,
                'name' => 'Chidlow',
                'latlng' => '-31.857,116.272',
            ),
            49 => 
            array (
                'code' => 51050,
                'name' => 'Glen Forrest - Darlington',
                'latlng' => '-31.9210127,116.1009929',
            ),
            50 => 
            array (
                'code' => 51051,
                'name' => 'Helena Valley - Koongamia',
                'latlng' => '-31.9228087,116.0403854',
            ),
            51 => 
            array (
                'code' => 51052,
                'name' => 'Malmalling - Reservoir',
                'latlng' => '-32.0543778,116.2792032',
            ),
            52 => 
            array (
                'code' => 51053,
                'name' => 'Mundaring',
                'latlng' => '-31.897,116.171',
            ),
            53 => 
            array (
                'code' => 51054,
                'name' => 'Swan View - Greenmount - Midvale',
                'latlng' => '-31.8960656,116.0609342',
            ),
            54 => 
            array (
                'code' => 51055,
                'name' => 'Avon Valley National Park',
                'latlng' => '-31.6294092,116.2290667',
            ),
            55 => 
            array (
                'code' => 51056,
                'name' => 'Ballajura',
                'latlng' => '-31.84,115.895',
            ),
            56 => 
            array (
                'code' => 51057,
                'name' => 'Beechboro',
                'latlng' => '-31.8689096,115.9408868',
            ),
            57 => 
            array (
                'code' => 51058,
                'name' => 'Bullsbrook',
                'latlng' => '-31.6632564,116.0285931',
            ),
            58 => 
            array (
                'code' => 51059,
                'name' => 'Ellenbrook',
                'latlng' => '-31.7636232,115.9750082',
            ),
            59 => 
            array (
                'code' => 51060,
                'name' => 'Gidgegannup',
                'latlng' => '-31.79199999999999,116.198',
            ),
            60 => 
            array (
                'code' => 51061,
                'name' => 'Hazelmere - South Guildford',
                'latlng' => '-31.9022642,115.9931629',
            ),
            61 => 
            array (
                'code' => 51062,
                'name' => 'Lockridge - Kiara',
                'latlng' => '-31.8773284,115.9357128',
            ),
            62 => 
            array (
                'code' => 51063,
                'name' => 'Malaga',
                'latlng' => '-31.86,115.893',
            ),
            63 => 
            array (
                'code' => 51064,
                'name' => 'Melaleuca - Lexia',
                'latlng' => '-31.793699,115.8915324',
            ),
            64 => 
            array (
                'code' => 51065,
                'name' => 'Middle Swan - Herne Hill',
                'latlng' => '-31.8635646,115.9968197',
            ),
            65 => 
            array (
                'code' => 51066,
                'name' => 'Midland - Guildford',
                'latlng' => '-31.898920, 115.971893',
            ),
            66 => 
            array (
                'code' => 51067,
                'name' => 'Stratton - Jane Brook',
                'latlng' => '-31.8601788,116.0503127',
            ),
            67 => 
            array (
                'code' => 51068,
                'name' => 'The Vines',
                'latlng' => '-31.757,116.003',
            ),
            68 => 
            array (
                'code' => 51069,
                'name' => 'Walyunga National Park',
                'latlng' => '-31.72753029999999,116.0833971',
            ),
            69 => 
            array (
                'code' => 51070,
                'name' => 'Craigie - Beldon',
                'latlng' => '-31.7796155,115.76449',
            ),
            70 => 
            array (
                'code' => 51071,
                'name' => 'Currambine - Kinross',
                'latlng' => '-31.7258837,115.7470334',
            ),
            71 => 
            array (
                'code' => 51072,
                'name' => 'Duncraig',
                'latlng' => '-31.833,115.777',
            ),
            72 => 
            array (
                'code' => 51073,
                'name' => 'Greenwood - Warwick',
                'latlng' => '-31.8335457,115.8063201',
            ),
            73 => 
            array (
                'code' => 51074,
                'name' => 'Heathridge - Connolly',
                'latlng' => '-31.7338936,115.7450508',
            ),
            74 => 
            array (
                'code' => 51075,
                'name' => 'Hillarys',
                'latlng' => '-31.807,115.744',
            ),
            75 => 
            array (
                'code' => 51076,
                'name' => 'Iluka - Burns Beach',
                'latlng' => '-31.7366881,115.7234145',
            ),
            76 => 
            array (
                'code' => 51077,
                'name' => 'Joondalup - Edgewater',
                'latlng' => '-31.763,115.782',
            ),
            77 => 
            array (
                'code' => 51078,
                'name' => 'Kingsley',
                'latlng' => '-31.808,115.794',
            ),
            78 => 
            array (
                'code' => 51079,
                'name' => 'Mullaloo - Kallaroo',
                'latlng' => '-31.7853165,115.7427548',
            ),
            79 => 
            array (
                'code' => 51080,
                'name' => 'Ocean Reef',
                'latlng' => '-31.752,115.735',
            ),
            80 => 
            array (
                'code' => 51081,
                'name' => 'Padbury',
                'latlng' => '-31.808,115.769',
            ),
            81 => 
            array (
                'code' => 51082,
                'name' => 'Sorrento - Marmion',
                'latlng' => '-31.8259917,115.7616593',
            ),
            82 => 
            array (
                'code' => 51083,
                'name' => 'Woodvale',
                'latlng' => '-31.7936346,115.798936',
            ),
            83 => 
            array (
                'code' => 51084,
                'name' => 'Balcatta - Hamersley',
                'latlng' => '-31.8596021,115.8088439',
            ),
            84 => 
            array (
                'code' => 51085,
                'name' => 'Balga - Mirrabooka',
                'latlng' => '-31.8567766,115.8474069',
            ),
            85 => 
            array (
                'code' => 51086,
                'name' => 'Dianella',
                'latlng' => '-31.888,115.874',
            ),
            86 => 
            array (
                'code' => 51087,
                'name' => 'Herdsman',
                'latlng' => '-31.921,115.804',
            ),
            87 => 
            array (
                'code' => 51088,
                'name' => 'Innaloo - Doubleview',
                'latlng' => '-31.893706,115.780397',
            ),
            88 => 
            array (
                'code' => 51089,
                'name' => 'Karrinyup - Gwelup - Carine',
                'latlng' => '-31.8823431,115.7933843',
            ),
            89 => 
            array (
                'code' => 51090,
                'name' => 'Nollamara - Westminster',
                'latlng' => '-31.8808366,115.8452754',
            ),
            90 => 
            array (
                'code' => 51091,
                'name' => 'Osborne Park Industrial',
                'latlng' => '-31.9017487,115.8124673',
            ),
            91 => 
            array (
                'code' => 51092,
                'name' => 'Scarborough',
                'latlng' => '-31.8942,115.7642',
            ),
            92 => 
            array (
                'code' => 51093,
                'name' => 'Stirling - Osborne Park',
                'latlng' => '-31.898,115.812',
            ),
            93 => 
            array (
                'code' => 51094,
                'name' => 'Trigg - North Beach - Watermans Bay',
                'latlng' => '-31.8594669,115.7762932',
            ),
            94 => 
            array (
                'code' => 51095,
                'name' => 'Tuart Hill - Joondanna',
                'latlng' => '-31.9028851,115.8428782',
            ),
            95 => 
            array (
                'code' => 51096,
                'name' => 'Wembley Downs - Churchlands - Woodlands',
                'latlng' => '-31.9158023,115.7930104',
            ),
            96 => 
            array (
                'code' => 51097,
                'name' => 'Yokine - Coolbinia - Menora',
                'latlng' => '-31.9139521,115.8591399',
            ),
            97 => 
            array (
                'code' => 51098,
                'name' => 'Alexander Heights - Koondoola',
                'latlng' => '-31.84320839999999,115.877219',
            ),
            98 => 
            array (
                'code' => 51099,
                'name' => 'Butler - Merriwa - Ridgewood',
                'latlng' => '-31.6648839,115.7255895',
            ),
            99 => 
            array (
                'code' => 51100,
                'name' => 'Carramar',
                'latlng' => '-31.7,115.786',
            ),
            100 => 
            array (
                'code' => 51101,
                'name' => 'Clarkson',
                'latlng' => '-31.684,115.728',
            ),
            101 => 
            array (
                'code' => 51102,
                'name' => 'Girrawheen',
                'latlng' => '-31.836,115.832',
            ),
            102 => 
            array (
                'code' => 51103,
                'name' => 'Madeley - Darch - Landsdale',
                'latlng' => '-31.8180948,115.8375282',
            ),
            103 => 
            array (
                'code' => 51104,
                'name' => 'Marangaroo',
                'latlng' => '-31.828,115.836',
            ),
            104 => 
            array (
                'code' => 51105,
                'name' => 'Mindarie - Quinns Rocks - Jindalee',
                'latlng' => '-31.6732145,115.6989258',
            ),
            105 => 
            array (
                'code' => 51106,
                'name' => 'Neerabup National Park',
                'latlng' => '-31.6862349,115.7427306',
            ),
            106 => 
            array (
                'code' => 51107,
                'name' => 'Tapping - Ashby - Sinagra',
                'latlng' => '-31.727683,115.808969',
            ),
            107 => 
            array (
                'code' => 51108,
                'name' => 'Wanneroo',
                'latlng' => '-31.7460273,115.8225997',
            ),
            108 => 
            array (
                'code' => 51109,
                'name' => 'Yanchep',
                'latlng' => '-31.5463919,115.6327039',
            ),
            109 => 
            array (
                'code' => 51110,
                'name' => 'Armadale - Wungong - Brookdale',
                'latlng' => '-32.168998,116.0092127',
            ),
            110 => 
            array (
                'code' => 51111,
                'name' => 'Ashendon - Lesley',
                'latlng' => '-32.114497,116.1946192',
            ),
            111 => 
            array (
                'code' => 51112,
                'name' => 'Camillo - Champion Lakes',
                'latlng' => '-32.115,116.002',
            ),
            112 => 
            array (
                'code' => 51113,
                'name' => 'Forrestdale - Harrisdale - Piara Waters',
                'latlng' => '-32.1163461,115.9272597',
            ),
            113 => 
            array (
                'code' => 51114,
                'name' => 'Kelmscott',
                'latlng' => '-32.119,116.026',
            ),
            114 => 
            array (
                'code' => 51115,
                'name' => 'Mount Nasura - Mount Richon - Bedfordale',
                'latlng' => '-32.1603265,116.0217018',
            ),
            115 => 
            array (
                'code' => 51116,
                'name' => 'Roleystone',
                'latlng' => '-32.1091293,116.0768508',
            ),
            116 => 
            array (
                'code' => 51117,
                'name' => 'Seville Grove',
                'latlng' => '-32.136,115.983',
            ),
            117 => 
            array (
                'code' => 51118,
                'name' => 'Belmont - Ascot - Redcliffe',
                'latlng' => '-31.9306251,115.9376286',
            ),
            118 => 
            array (
                'code' => 51119,
                'name' => 'East Victoria Park - Carlisle',
                'latlng' => '-31.977,115.916',
            ),
            119 => 
            array (
                'code' => 51120,
                'name' => 'Kewdale Commercial',
                'latlng' => '-31.9825161,115.9471463',
            ),
            120 => 
            array (
                'code' => 51121,
                'name' => 'Perth Airport',
                'latlng' => '-31.9385476,115.9672492',
            ),
            121 => 
            array (
                'code' => 51122,
                'name' => 'Rivervale - Kewdale - Cloverdale',
                'latlng' => '-31.9699452,115.9200949',
            ),
            122 => 
            array (
                'code' => 51123,
                'name' => 'Victoria Park - Lathlain - Burswood',
                'latlng' => '-31.9543846,115.8953666',
            ),
            123 => 
            array (
                'code' => 51124,
                'name' => 'Bentley - Wilson - St James',
                'latlng' => '-32.0248419,115.9435752',
            ),
            124 => 
            array (
                'code' => 51125,
                'name' => 'Canning Vale - West',
                'latlng' => '-32.08000000000001,115.915',
            ),
            125 => 
            array (
                'code' => 51126,
                'name' => 'Canning Vale Commercial',
                'latlng' => '-32.063637,115.925886',
            ),
            126 => 
            array (
                'code' => 51127,
                'name' => 'Cannington - Queens Park',
                'latlng' => '-32.0207712,115.9256214',
            ),
            127 => 
            array (
                'code' => 51128,
                'name' => 'Parkwood - Ferndale - Lynwood',
                'latlng' => '-32.0382753,115.9297998',
            ),
            128 => 
            array (
                'code' => 51129,
                'name' => 'Riverton - Shelley - Rossmoyne',
                'latlng' => '-32.0323285,115.8732772',
            ),
            129 => 
            array (
                'code' => 51130,
                'name' => 'Welshpool',
                'latlng' => '-31.994,115.956',
            ),
            130 => 
            array (
                'code' => 51131,
                'name' => 'Willetton',
                'latlng' => '-32.053,115.889',
            ),
            131 => 
            array (
                'code' => 51132,
                'name' => 'Beckenham - Kenwick - Langford',
                'latlng' => '-32.0344916,115.9570316',
            ),
            132 => 
            array (
                'code' => 51133,
                'name' => 'Canning Vale - East',
                'latlng' => '-32.08000000000001,115.915',
            ),
            133 => 
            array (
                'code' => 51134,
                'name' => 'Gosnells',
                'latlng' => '-32.072,115.995',
            ),
            134 => 
            array (
                'code' => 51135,
                'name' => 'Huntingdale - Southern River',
                'latlng' => '-32.0991968,115.9659221',
            ),
            135 => 
            array (
                'code' => 51136,
                'name' => 'Maddington - Orange Grove - Martin',
                'latlng' => '-32.0352128,116.0162655',
            ),
            136 => 
            array (
                'code' => 51137,
                'name' => 'Thornlie',
                'latlng' => '-32.058,115.958',
            ),
            137 => 
            array (
                'code' => 51138,
                'name' => 'Forrestfield - Wattle Grove',
                'latlng' => '-32.0064542,115.9893338',
            ),
            138 => 
            array (
                'code' => 51139,
                'name' => 'High Wycombe',
                'latlng' => '-31.942,116.003',
            ),
            139 => 
            array (
                'code' => 51140,
                'name' => 'Kalamunda - Maida Vale - Gooseberry Hill',
                'latlng' => '-31.9520708,116.0283647',
            ),
            140 => 
            array (
                'code' => 51141,
                'name' => 'Lesmurdie - Bickley - Carmel',
                'latlng' => '-32.01252,116.05164',
            ),
            141 => 
            array (
                'code' => 51142,
                'name' => 'Byford',
                'latlng' => '-32.222,116.001',
            ),
            142 => 
            array (
                'code' => 51143,
                'name' => 'Mundijong',
                'latlng' => '-32.284,115.973',
            ),
            143 => 
            array (
                'code' => 51144,
                'name' => 'Serpentine - Jarrahdale',
                'latlng' => '-32.3492396,115.9940986',
            ),
            144 => 
            array (
                'code' => 51145,
                'name' => 'Como',
                'latlng' => '-32.003,115.858',
            ),
            145 => 
            array (
                'code' => 51146,
                'name' => 'Manning - Waterford',
                'latlng' => '-32.0126409,115.8878431',
            ),
            146 => 
            array (
                'code' => 51147,
                'name' => 'South Perth - Kensington',
                'latlng' => '-31.9825,115.884444',
            ),
            147 => 
            array (
                'code' => 51148,
                'name' => 'Banjup',
                'latlng' => '-32.1571078,115.8889368',
            ),
            148 => 
            array (
                'code' => 51149,
                'name' => 'Beeliar',
                'latlng' => '-32.138,115.793',
            ),
            149 => 
            array (
                'code' => 51150,
                'name' => 'Bibra Industrial',
                'latlng' => '-32.1007802,115.8137478',
            ),
            150 => 
            array (
                'code' => 51151,
                'name' => 'Bibra Lake',
                'latlng' => '-32.099,115.818',
            ),
            151 => 
            array (
                'code' => 51152,
                'name' => 'Coogee',
                'latlng' => '-32.118824, 115.765956',
            ),
            152 => 
            array (
                'code' => 51153,
                'name' => 'Coolbellup',
                'latlng' => '-32.0807296,115.8078102',
            ),
            153 => 
            array (
                'code' => 51154,
                'name' => 'Hamilton Hill',
                'latlng' => '-32.08000000000001,115.775',
            ),
            154 => 
            array (
                'code' => 51155,
                'name' => 'Henderson',
                'latlng' => '-32.169,115.781',
            ),
            155 => 
            array (
                'code' => 51156,
                'name' => 'Jandakot',
                'latlng' => '-32.107,115.867',
            ),
            156 => 
            array (
                'code' => 51157,
                'name' => 'Jandakot Airport',
                'latlng' => '-32.0934311,115.8799302',
            ),
            157 => 
            array (
                'code' => 51158,
                'name' => 'North Coogee',
                'latlng' => '-32.099,115.761',
            ),
            158 => 
            array (
                'code' => 51159,
                'name' => 'South Lake - Cockburn Central',
                'latlng' => '-32.107,115.841',
            ),
            159 => 
            array (
                'code' => 51160,
                'name' => 'Spearwood',
                'latlng' => '-32.106,115.783',
            ),
            160 => 
            array (
                'code' => 51161,
                'name' => 'Success - Hammond Park',
                'latlng' => '-32.1595786,115.8471184',
            ),
            161 => 
            array (
                'code' => 51162,
                'name' => 'Wattleup',
                'latlng' => '-32.17,115.824',
            ),
            162 => 
            array (
                'code' => 51163,
                'name' => 'Yangebup',
                'latlng' => '-32.1218045,115.8137261',
            ),
            163 => 
            array (
                'code' => 51164,
                'name' => 'East Fremantle',
                'latlng' => '-32.038,115.768',
            ),
            164 => 
            array (
                'code' => 51165,
                'name' => 'Fremantle',
                'latlng' => '-32.0569,115.7439',
            ),
            165 => 
            array (
                'code' => 51166,
                'name' => 'Fremantle - South',
                'latlng' => '-32.074,115.754',
            ),
            166 => 
            array (
                'code' => 51167,
            'name' => 'O\'Connor (WA)',
                'latlng' => '-32.064,115.797',
            ),
            167 => 
            array (
                'code' => 51168,
                'name' => 'Anketell - Wandi',
                'latlng' => '-32.2099698,115.850861',
            ),
            168 => 
            array (
                'code' => 51169,
            'name' => 'Bertram - Wellard (West)',
                'latlng' => '-32.2518937,115.8399461',
            ),
            169 => 
            array (
                'code' => 51170,
                'name' => 'Calista',
                'latlng' => '-32.242,115.807',
            ),
            170 => 
            array (
                'code' => 51171,
            'name' => 'Casuarina - Wellard (East)',
                'latlng' => '-32.246971,115.8870343',
            ),
            171 => 
            array (
                'code' => 51172,
                'name' => 'Hope Valley - Postans',
                'latlng' => '-32.1903431,115.8120337',
            ),
            172 => 
            array (
                'code' => 51173,
                'name' => 'Kwinana Industrial',
                'latlng' => '-32.19177500000001,115.787658',
            ),
            173 => 
            array (
                'code' => 51174,
                'name' => 'Parmelia - Orelia',
                'latlng' => '-32.2490242,115.8255562',
            ),
            174 => 
            array (
                'code' => 51175,
                'name' => 'Applecross - Ardross',
                'latlng' => '-32.0119668,115.8358595',
            ),
            175 => 
            array (
                'code' => 51176,
                'name' => 'Bateman',
                'latlng' => '-32.059446,115.844908',
            ),
            176 => 
            array (
                'code' => 51177,
                'name' => 'Bicton - Palmyra',
                'latlng' => '-32.0353893,115.7861206',
            ),
            177 => 
            array (
                'code' => 51178,
                'name' => 'Booragoon',
                'latlng' => '-32.039,115.831',
            ),
            178 => 
            array (
                'code' => 51179,
                'name' => 'Bull Creek',
                'latlng' => '-32.055,115.863',
            ),
            179 => 
            array (
                'code' => 51180,
                'name' => 'Leeming',
                'latlng' => '-32.082,115.851',
            ),
            180 => 
            array (
                'code' => 51181,
                'name' => 'Melville',
                'latlng' => '-32.041,115.801',
            ),
            181 => 
            array (
                'code' => 51182,
                'name' => 'Murdoch - Kardinya',
                'latlng' => '-32.0627133,115.8428814',
            ),
            182 => 
            array (
                'code' => 51183,
                'name' => 'Willagee',
                'latlng' => '-32.052,115.804',
            ),
            183 => 
            array (
                'code' => 51184,
                'name' => 'Winthrop',
                'latlng' => '-32.053,115.826',
            ),
            184 => 
            array (
                'code' => 51185,
                'name' => 'Baldivis',
                'latlng' => '-32.334,115.812',
            ),
            185 => 
            array (
                'code' => 51186,
                'name' => 'Cooloongup',
                'latlng' => '-32.296,115.78',
            ),
            186 => 
            array (
                'code' => 51187,
                'name' => 'Port Kennedy',
                'latlng' => '-32.369,115.736',
            ),
            187 => 
            array (
                'code' => 51188,
                'name' => 'Rockingham',
                'latlng' => '-32.281,115.727',
            ),
            188 => 
            array (
                'code' => 51189,
                'name' => 'Rockingham Lakes',
                'latlng' => '-32.3575092,115.7680137',
            ),
            189 => 
            array (
                'code' => 51190,
                'name' => 'Safety Bay - Shoalwater',
                'latlng' => '-32.325167,115.7709282',
            ),
            190 => 
            array (
                'code' => 51191,
                'name' => 'Singleton - Golden Bay - Secret Harbour',
                'latlng' => '-32.432552,115.7656936',
            ),
            191 => 
            array (
                'code' => 51192,
                'name' => 'Waikiki',
                'latlng' => '-32.322,115.769',
            ),
            192 => 
            array (
                'code' => 51193,
                'name' => 'Warnbro',
                'latlng' => '-32.34,115.747',
            ),
            193 => 
            array (
                'code' => 51194,
                'name' => 'Esperance',
                'latlng' => '-33.8608027,121.8896205',
            ),
            194 => 
            array (
                'code' => 51195,
                'name' => 'Esperance Region',
                'latlng' => '-33.1866262,121.9928078',
            ),
            195 => 
            array (
                'code' => 51196,
                'name' => 'Carnarvon',
                'latlng' => '-24.884,113.661',
            ),
            196 => 
            array (
                'code' => 51197,
                'name' => 'Exmouth',
                'latlng' => '-21.9445261,114.1313015',
            ),
            197 => 
            array (
                'code' => 51198,
                'name' => 'Boulder',
                'latlng' => '-30.778,121.489',
            ),
            198 => 
            array (
                'code' => 51199,
                'name' => 'Kalgoorlie',
                'latlng' => '-30.749,121.466',
            ),
            199 => 
            array (
                'code' => 51200,
                'name' => 'Kalgoorlie - North',
                'latlng' => '-30.749,121.466',
            ),
            200 => 
            array (
                'code' => 51201,
                'name' => 'Kalgoorlie Airport',
                'latlng' => '-30.7854698,121.4580793',
            ),
            201 => 
            array (
                'code' => 51202,
                'name' => 'Kambalda - Coolgardie - Norseman',
                'latlng' => '-32.196,121.778',
            ),
            202 => 
            array (
                'code' => 51203,
                'name' => 'Leinster - Leonora',
                'latlng' => '-27.911944,120.697',
            ),
            203 => 
            array (
                'code' => 51204,
            'name' => 'Trafalgar (WA)',
                'latlng' => '-30.8101901,121.5715153',
            ),
            204 => 
            array (
                'code' => 51205,
                'name' => 'Broome',
                'latlng' => '-17.9614336,122.235852',
            ),
            205 => 
            array (
                'code' => 51206,
                'name' => 'Derby - West Kimberley',
                'latlng' => '-16.8419306,125.2148469',
            ),
            206 => 
            array (
                'code' => 51207,
                'name' => 'Halls Creek',
                'latlng' => '-18.2247291,127.6729255',
            ),
            207 => 
            array (
                'code' => 51208,
                'name' => 'Kununurra',
                'latlng' => '-15.7785409,128.7416854',
            ),
            208 => 
            array (
                'code' => 51209,
                'name' => 'Roebuck',
                'latlng' => '-17.8641886,122.3688446',
            ),
            209 => 
            array (
                'code' => 51210,
                'name' => 'Geraldton',
                'latlng' => '-28.7773715,114.6149715',
            ),
            210 => 
            array (
                'code' => 51211,
                'name' => 'Geraldton - East',
                'latlng' => '-28.7773715,114.6149715',
            ),
            211 => 
            array (
                'code' => 51212,
                'name' => 'Geraldton - North',
                'latlng' => '-28.7773715,114.6149715',
            ),
            212 => 
            array (
                'code' => 51213,
                'name' => 'Geraldton - South',
                'latlng' => '-28.7773715,114.6149715',
            ),
            213 => 
            array (
                'code' => 51214,
                'name' => 'Irwin',
                'latlng' => '-29.2228199,115.0732883',
            ),
            214 => 
            array (
                'code' => 51215,
                'name' => 'Meekatharra',
                'latlng' => '-26.593611,118.495278',
            ),
            215 => 
            array (
                'code' => 51216,
                'name' => 'Morawa',
                'latlng' => '-29.211111,116.008889',
            ),
            216 => 
            array (
                'code' => 51217,
                'name' => 'Northampton - Mullewa - Greenough',
                'latlng' => '-28.95,114.75',
            ),
            217 => 
            array (
                'code' => 51218,
            'name' => 'Ashburton (WA)',
                'latlng' => '-22.5768514,116.419389',
            ),
            218 => 
            array (
                'code' => 51219,
                'name' => 'East Pilbara',
                'latlng' => '-22.434355,123.7964613',
            ),
            219 => 
            array (
                'code' => 51220,
                'name' => 'Karratha',
                'latlng' => '-20.73535,116.8458043',
            ),
            220 => 
            array (
                'code' => 51221,
                'name' => 'Newman',
                'latlng' => '-23.3593208,119.7350342',
            ),
            221 => 
            array (
                'code' => 51222,
                'name' => 'Port Hedland',
                'latlng' => '-20.3106621,118.5878223',
            ),
            222 => 
            array (
                'code' => 51223,
                'name' => 'Roebourne',
                'latlng' => '-20.7689815,117.1430197',
            ),
            223 => 
            array (
                'code' => 51224,
                'name' => 'South Hedland',
                'latlng' => '-20.4,118.616667',
            ),
            224 => 
            array (
                'code' => 51225,
                'name' => 'Albany',
                'latlng' => '-35.0275298,117.883959',
            ),
            225 => 
            array (
                'code' => 51226,
                'name' => 'Albany Region',
                'latlng' => '-35.0275298,117.883959',
            ),
            226 => 
            array (
                'code' => 51227,
                'name' => 'Bayonet Head - Lower King',
                'latlng' => '-34.9693117,117.9244716',
            ),
            227 => 
            array (
                'code' => 51228,
                'name' => 'Denmark',
                'latlng' => '-34.9749188,117.3560796',
            ),
            228 => 
            array (
                'code' => 51229,
                'name' => 'Gnowangerup',
                'latlng' => '-33.94,118.01',
            ),
            229 => 
            array (
                'code' => 51230,
                'name' => 'Katanning',
                'latlng' => '-33.6893674,117.555118',
            ),
            230 => 
            array (
                'code' => 51231,
                'name' => 'Kojonup',
                'latlng' => '-33.833189,117.1595629',
            ),
            231 => 
            array (
                'code' => 51232,
                'name' => 'Little Grove - Elleker',
                'latlng' => '-35.0085375,117.7244134',
            ),
            232 => 
            array (
                'code' => 51233,
                'name' => 'McKail - Willyung',
                'latlng' => '-35.0001344,117.8553331',
            ),
            233 => 
            array (
                'code' => 51234,
                'name' => 'Plantagenet',
                'latlng' => '-34.5846897,117.6434844',
            ),
            234 => 
            array (
                'code' => 51235,
                'name' => 'Stirling Range National Park',
                'latlng' => '-34.3991158,117.9627692',
            ),
            235 => 
            array (
                'code' => 51236,
                'name' => 'Chittering',
                'latlng' => '-31.4891708,116.0694633',
            ),
            236 => 
            array (
                'code' => 51237,
                'name' => 'Cunderdin',
                'latlng' => '-31.6362921,117.2418909',
            ),
            237 => 
            array (
                'code' => 51238,
                'name' => 'Dowerin',
                'latlng' => '-31.1961996,117.0332591',
            ),
            238 => 
            array (
                'code' => 51239,
                'name' => 'Gingin - Dandaragan',
                'latlng' => '-30.7889815,115.7083265',
            ),
            239 => 
            array (
                'code' => 51240,
                'name' => 'Merredin',
                'latlng' => '-31.4837097,118.2770821',
            ),
            240 => 
            array (
                'code' => 51241,
                'name' => 'Moora',
                'latlng' => '-30.638,116.01',
            ),
            241 => 
            array (
                'code' => 51242,
                'name' => 'Mukinbudin',
                'latlng' => '-30.9091693,118.2522968',
            ),
            242 => 
            array (
                'code' => 51243,
                'name' => 'Northam',
                'latlng' => '-31.6525301,116.6654836',
            ),
            243 => 
            array (
                'code' => 51244,
                'name' => 'Toodyay',
                'latlng' => '-31.55,116.45',
            ),
            244 => 
            array (
                'code' => 51245,
                'name' => 'York - Beverley',
                'latlng' => '-32.098644, 116.903869',
            ),
            245 => 
            array (
                'code' => 51246,
                'name' => 'Brookton',
                'latlng' => '-32.36799999999999,117.006',
            ),
            246 => 
            array (
                'code' => 51247,
                'name' => 'Kulin',
                'latlng' => '-32.67,118.15',
            ),
            247 => 
            array (
                'code' => 51248,
                'name' => 'Murray',
                'latlng' => '-32.655053, 115.946783',
            ),
            248 => 
            array (
                'code' => 51249,
                'name' => 'Narrogin',
                'latlng' => '-32.9365232,117.1719722',
            ),
            249 => 
            array (
                'code' => 51250,
                'name' => 'Wagin',
                'latlng' => '-33.3053993,117.3474325',
            ),
            250 => 
            array (
                'code' => 91001,
                'name' => 'Christmas Island',
                'latlng' => '-10.447525,105.690449',
            ),
            251 => 
            array (
                'code' => 91002,
                'name' => 'Cocos Keeling Island',
                'latlng' => '-12.1706919,96.8417478',
            ),
        ));
        
        
    }
}