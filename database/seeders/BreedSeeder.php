<?php
namespace Database\Seeders;
use App\Models\Breed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Breed::create([
            'name' => 'Calicó',
            'description' => 'Una variación de color del gato doméstico, caracterizada por su pelaje tricolor con manchas de negro, blanco y naranja. No es una raza en sí, sino un patrón de coloración que puede presentarse en varias razas. La mayoría de los gatos calicó son hembras debido a la genética de su coloración.',
        ]);

        Breed::create([
            'name' => 'Maine Coon',
            'description' => 'Una de las razas de gatos más grandes, originaria de los Estados Unidos. Conocidos por su pelaje largo y denso, cuerpo musculoso y personalidad amigable. Son excelentes cazadores y se adaptan bien al frío, con una cola abundante y orejas con mechones de pelo.',
        ]);

        Breed::create([
            'name' => 'Persa',
            'description' => 'Raza de gato conocida por su rostro aplastado y pelaje largo y sedoso. Tienen una apariencia redondeada y esponjosa, con personalidad tranquila y sedentaria. Requieren cuidados especiales en su pelaje para prevenir enredos.',
        ]);

        Breed::create([
            'name' => 'Siamés',
            'description' => 'Raza originaria de Tailandia, conocida por su pelaje corto y puntos de color en cara, patas y cola. Son muy inteligentes, vocales y sociales. Tienen un cuerpo estilizado y ojos azules intensos.',
        ]);

        Breed::create([
            'name' => 'Bengala',
            'description' => 'Raza desarrollada cruzando gatos domésticos con leopardos asiáticos. Tienen un pelaje corto y brillante con manchas o rosetas que los hacen parecer pequeños leopardos. Son muy activos, inteligentes y les encanta jugar.',
        ]);
    }
}