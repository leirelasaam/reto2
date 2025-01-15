<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('modules')->insert([

            //se insertan 5 módulos en el ciclo 1 (DAM) de primero
            ['user_id' => 11, 'code' => 'SI', 'name' => 'Sistemas informaticos', 'hours' => 165, 'course' => 1, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 11, 'code' => 'BBDD', 'name' => 'Bases de datos', 'hours' => 198, 'course' => 1, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 11, 'code' => 'PROG', 'name' => 'Programación', 'hours' => 264, 'course' => 1, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 12, 'code' => 'LMSGI', 'name' => 'Lenguajes de marcas y sistemas de gestión informática', 'hours' => 132, 'course' => 1, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 12, 'code' => 'EDE', 'name' => 'Entornos de desarrollo', 'hours' => 99, 'course' => 1, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            //se insertan 5 módulos en el ciclo 1 (DAM) de segundo
            //Id's de los modulos 2DAM: 6ACD,7DI,8PMDM,9PSP,10SGE
            ['user_id'=> 12, 'code' => 'ACD', 'name' => 'Acceso a datos', 'hours' => 120, 'course' => 2, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id'=> 13, 'code' => 'DI', 'name' => 'Desarrollo de interfaces', 'hours' => 140, 'course' => 2, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id'=> 13, 'code' => 'PMDM', 'name' => 'Programación multimedia y dispositivos móviles', 'hours' => 100, 'course' => 2, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id'=> 13, 'code' => 'PSP', 'name' => 'Programación de servicios y procesos', 'hours' => 80, 'course' => 2, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['user_id'=> 14, 'code' => 'SGE', 'name' => 'Sistemas de gestión empresarial', 'hours' => 100, 'course' => 2, 'cycle_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            //se insertan 5 módulos en el ciclo 2 (DAW) de primero
            ['user_id' => 14, 'code' => 'SIW', 'name' => 'Sistemas informaticos', 'hours' => 165, 'course' => 1, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 14, 'code' => 'BBDDW', 'name' => 'Bases de datos', 'hours' => 198, 'course' => 1, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 15, 'code' => 'PROGW', 'name' => 'Programación', 'hours' => 264, 'course' => 1, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 15, 'code' => 'LMSGIW', 'name' => 'Lenguajes de marcas y sistemas de gestión informática', 'hours' => 132, 'course' => 1, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 15, 'code' => 'EDEW', 'name' => 'Entornos de desarrollo', 'hours' => 99, 'course' => 1, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            //se insertan 5 módulos en el ciclo 2 (DAW) de segundo
            ['user_id' => 16, 'code' => 'DWEC', 'name' => 'Desarrollo web en entorno cliente', 'hours' => 140, 'course' => 2, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 16, 'code' => 'DWES', 'name' => 'Desarrollo web en entorno servidor', 'hours' => 180, 'course' => 2, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 16, 'code' => 'DAW', 'name' => 'Despliegue de aplicaciones web', 'hours' => 100, 'course' => 2, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 17, 'code' => 'DIW', 'name' => 'Diseño de interfaces web', 'hours' => 120, 'course' => 2, 'cycle_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            //se insertan 5 módulos en el ciclo 3 (ASIR) de primero
            ['user_id' => 17, 'code' => 'ISO', 'name' => 'Implantación de sistemas operativos', 'hours' => 264, 'course' => 1, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 17, 'code' => 'PAR', 'name' => 'Planificación y administración de redes', 'hours' => 198, 'course' => 1, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 18, 'code' => 'FDH', 'name' => 'Fundamentos de hardware', 'hours' => 99, 'course' => 1, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 18, 'code' => 'GBD', 'name' => 'Gestión de bases de datos', 'hours' => 198, 'course' => 1, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 18, 'code' => 'LMSGIA', 'name' => 'Lenguajes de marcas y sistemas de gestión de información', 'hours' => 132, 'course' => 1, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            //se insertan 5 módulos en el ciclo 3 (ASIR) de segundo
            ['user_id' => 19, 'code' => 'ASO', 'name' => 'Administración de sistemas operativos	', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 19, 'code' => 'SRI', 'name' => 'Servicios de red e internet', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 19, 'code' => 'IAW', 'name' => 'Implantación de aplicaciones web', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 20, 'code' => 'ASGBD', 'name' => 'Administración de sistemas gestores de bases de datos', 'hours' => 60, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 20, 'code' => 'SAD', 'name' => 'Seguridad y alta disponibilidad', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        
            //Hay que crear el ciclo 4 (DFM)
            //***se insertan 5 módulos en el ciclo 4 (DFM) de primero Diseño de fabricación mecánica
            ['user_id' => 20, 'code' => 'RGFM', 'name' => 'Representación gráfica en fabricación mecánica', 'hours' => 198 , 'course' => 1, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 21, 'code' => 'DPM', 'name' => 'Diseño de productos mecánicos', 'hours' => 297 , 'course' => 1, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 21, 'code' => 'ALF', 'name' => 'Automatización de la fabricación	', 'hours' => 198 , 'course' => 1, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 21, 'code' => 'TFM', 'name' => 'Técnicas de fabricación mecánica	', 'hours' => 198 , 'course' => 1, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 22, 'code' => 'FOLD', 'name' => 'Formación y Orientación Laboral	', 'hours' => 99 , 'course' => 1, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            //***se insertan 5 módulos en el ciclo 4 (DFM) de segundo
            ['user_id' => 22, 'code' => 'DUPCE', 'name' => 'Diseño de útiles de procesado de chapa y estampación', 'hours' => 240 , 'course' => 2, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 22, 'code' => 'DMMF', 'name' => 'Diseño de moldes y modelos de fundición	', 'hours' => 120 , 'course' => 2, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 23, 'code' => 'ITD', 'name' => 'Inglés técnico', 'hours' => 40 , 'course' => 2, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 23, 'code' => 'DMPP', 'name' => 'Diseño de moldes para productos poliméricos	', 'hours' => 140 , 'course' => 2, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 23, 'code' => 'PDPM', 'name' => 'Proyecto de diseño de productos mecánicos	', 'hours' => 50 , 'course' => 2, 'cycle_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            //***se insertan 5 módulos en el ciclo 3 (ASIR) de segundo
            ['user_id' => 24, 'code' => 'ASO', 'name' => 'Administración de sistemas operativos	', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 24, 'code' => 'SRI', 'name' => 'Servicios de red e internet', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 24, 'code' => 'IAW', 'name' => 'Implantación de aplicaciones web', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 25, 'code' => 'ASGBD', 'name' => 'Administración de sistemas gestores de bases de datos', 'hours' => 60, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 25, 'code' => 'SAD', 'name' => 'Seguridad y alta disponibilidad', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            //***se insertan 5 módulos en el ciclo 3 (ASIR) de segundo
            ['user_id' => 25, 'code' => 'ASO', 'name' => 'Administración de sistemas operativos	', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 26, 'code' => 'SRI', 'name' => 'Servicios de red e internet', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 26, 'code' => 'IAW', 'name' => 'Implantación de aplicaciones web', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 26, 'code' => 'ASGBD', 'name' => 'Administración de sistemas gestores de bases de datos', 'hours' => 60, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 27, 'code' => 'SAD', 'name' => 'Seguridad y alta disponibilidad', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            //***se insertan 5 módulos en el ciclo 3 (ASIR) de segundo
            ['user_id' => 27, 'code' => 'ASO', 'name' => 'Administración de sistemas operativos	', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 27, 'code' => 'SRI', 'name' => 'Servicios de red e internet', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 28, 'code' => 'IAW', 'name' => 'Implantación de aplicaciones web', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 28, 'code' => 'ASGBD', 'name' => 'Administración de sistemas gestores de bases de datos', 'hours' => 60, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 28, 'code' => 'SAD', 'name' => 'Seguridad y alta disponibilidad', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            //***se insertan 5 módulos en el ciclo 3 (ASIR) de segundo
            ['user_id' => 29, 'code' => 'ASO', 'name' => 'Administración de sistemas operativos	', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 29, 'code' => 'SRI', 'name' => 'Servicios de red e internet', 'hours' => 120, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 29, 'code' => 'IAW', 'name' => 'Implantación de aplicaciones web', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 30, 'code' => 'ASGBD', 'name' => 'Administración de sistemas gestores de bases de datos', 'hours' => 60, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 30, 'code' => 'SAD', 'name' => 'Seguridad y alta disponibilidad', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 30, 'code' => 'SAD', 'name' => 'Seguridad y alta disponibilidad', 'hours' => 100, 'course' => 2, 'cycle_id' => 3, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}

