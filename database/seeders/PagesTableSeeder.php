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
                'author_id' => 1,
                'body' => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pellentesque odio sit amet nulla lacinia luctus. Aliquam auctor elit ut tempor tincidunt. Nam non magna augue. Suspendisse commodo luctus sollicitudin. Proin sagittis tellus a scelerisque molestie. Aenean efficitur mauris non nisl dignissim commodo. Nulla aliquam libero at risus dictum sollicitudin in nec est. Nam blandit nibh at nisl pharetra fringilla eget vel mauris. Nulla ullamcorper porta faucibus. In nunc eros, suscipit at consectetur in, volutpat eget felis. Praesent pharetra viverra volutpat. Sed vel justo et tortor dignissim tristique.</p>
<p>Nullam scelerisque luctus lectus sit amet aliquet. Phasellus commodo erat eget leo pulvinar, nec eleifend leo mollis. Nam tristique eros a dolor pretium, eu tempor urna dignissim. Cras eu maximus odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc elementum tincidunt ultricies. Nulla venenatis, dolor eget egestas iaculis, ligula tortor interdum leo, id pulvinar massa ante eget lacus. Aenean euismod urna libero, ac faucibus erat viverra vitae. Nullam molestie accumsan molestie.</p>
<p>Mauris sodales bibendum purus, auctor hendrerit libero posuere vulputate. Maecenas sagittis est non massa mattis luctus. Maecenas gravida metus faucibus, gravida justo vel, pulvinar nisi. In risus est, interdum eu turpis id, accumsan placerat erat. Nullam ut mi non tellus congue egestas. Sed quis ornare ante, et lobortis augue. Fusce ornare massa sed tristique posuere. Nam scelerisque vitae justo et aliquam. Aliquam ac vestibulum est, in molestie augue. Praesent consequat arcu ut nisi eleifend, vitae lobortis nunc faucibus. Cras dui urna, consequat pretium arcu ut, ultricies ultricies sapien. Nam sed eleifend orci. Aliquam vehicula, metus non aliquam tincidunt, justo nisi congue ex, a auctor mauris diam quis ex.</p>
<p>Etiam dictum luctus ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur euismod maximus lorem. Ut ac porttitor nibh. Aliquam mollis felis quis pulvinar rhoncus. Donec sed eleifend lectus. Nullam in tortor pharetra, vulputate est eu, accumsan eros. Pellentesque fringilla ligula ac ex posuere gravida. Morbi eget viverra odio.</p>
<p>Pellentesque pharetra turpis a enim eleifend, et imperdiet magna commodo. Proin eget ligula felis. Ut interdum lectus eu ipsum pharetra, non scelerisque felis hendrerit. Aliquam eleifend scelerisque felis a hendrerit. Sed at fringilla lacus. Fusce quis lacinia felis. Suspendisse tincidunt nisl non nisi molestie rhoncus eu sit amet magna. Donec nibh sem, suscipit quis posuere in, egestas ac ante. Maecenas leo nisl, egestas sed erat sed, rutrum molestie orci. Ut aliquet, risus eget aliquet venenatis, diam nunc faucibus nibh, id ornare dui risus in dolor. Aliquam sollicitudin sem nec lorem gravida, vulputate gravida velit scelerisque. Suspendisse potenti. Morbi ultrices tempor neque quis interdum. Phasellus maximus, augue ac dictum laoreet, elit lacus posuere elit, a pretium purus velit vel dolor.</p>',
                'created_at' => '2024-04-30 14:55:33',
                'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
                'id' => 1,
                'image' => 'pages/page1.jpg',
                'meta_description' => 'Aguaysal es un ecoalbergue en Beni',
                'meta_keywords' => 'Agua y sal',
                'slug' => 'sobre-nosotros',
                'status' => 'ACTIVE',
                'title' => 'SOBRE NOSOTROS',
                'updated_at' => '2024-05-07 10:58:00',
            ),
        ));
        
        
    }
}