<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'title' => 'sobre nosotros',
                'excerpt' => 'Aguaysal se encuentra en Santa Rosa del Yacuma, en la región del departamento del Beni, y está rodeado de naturaleza.',
            'body' => '<p><span style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);"><strong>Aguaysal </strong></span>se encuentra en <strong>Santa Rosa del Yacuma</strong>, en la regi&oacute;n del departamento del Beni, y est&aacute; rodeado de naturaleza. El Albergue est&aacute; dentro del &Aacute;rea Protegida Pampas del Yacuma, dispone de churrasqueras y parking privados gratis.</p>
<p>Las caba&ntilde;as tienen acceso a un balc&oacute;n de reposo con hamaqueros, cuenta con espacio para 3 personas, televisi&oacute;n y aire acondicionado. Hay toallas y ropa de cama en las caba&ntilde;as.<br>El aeropuerto m&aacute;s cercano (Aeropuerto Regional y Tur&iacute;stico de Rurrenabaque) est&aacute; a 222 km del alojamiento, que ofrece.</p>',
                'image' => 'pages\\September2024\\wRoVfQU4WaEIsG91GnZs.webp',
                'slug' => 'sobre-nosotros',
                'meta_description' => 'albergue',
                'meta_keywords' => 'albergue',
                'status' => 'INACTIVE',
                'created_at' => '2024-09-10 12:09:27',
                'updated_at' => '2024-09-10 13:27:19',
            ),
        ));
        
        
    }
}