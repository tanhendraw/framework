<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('param')->unique();
            $table->string('text');
            $table->text('value');
            $table->timestamps();
        });

        DB::table('settings')->insert([
                'param' => 'websiteTitle',
                'text' => 'Website Title',
                'value' => 'Website'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'mainMetaDesc',
                'text' => 'Meta Description',
                'value' => 'Tan Website Studio'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'mainMetaKeywords',
                'text' => 'Meta Keywords',
                'value' => 'Tan Website Studio'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'adminEmail',
                'text' => 'Admin Email',
                'value' => 'info@tanwebsitestudio.com'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'senderEmail',
                'text' => 'Sender Email',
                'value' => 'info@tanwebsitestudio.com'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'senderName',
                'text' => 'Sender Name',
                'value' => 'Tan Website Studio'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'receiverEmail',
                'text' => 'Receiver Email',
                'value' => 'hello@tanwebsitestudio.com'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }

}
