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
                'param' => 'smtpSecurity',
                'text' => 'SMTP Security',
                'value' => 'ssl'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'smtpPort',
                'text' => 'SMTP Port',
                'value' => '465'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'smtpHost',
                'text' => 'SMTP Host',
                'value' => ''
            ]
        );
        DB::table('settings')->insert([
                'param' => 'smtpPassword',
                'text' => 'SMTP Password',
                'value' => ''
            ]
        );
        DB::table('settings')->insert([
                'param' => 'smtpUsername',
                'text' => 'SMTP Username',
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
                'param' => 'replyToEmail',
                'text' => 'Reply to Email',
                'value' => 'info@tanwebsitestudio.com'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'replyToName',
                'text' => 'Reply to Name',
                'value' => 'Tan Website Studio'
            ]
        );
        DB::table('settings')->insert([
                'param' => 'mailchimpAPIKey',
                'text' => 'Mailchimp API Key',
                'value' => ''
            ]
        );;
        DB::table('settings')->insert([
                'param' => 'mailchimpListID',
                'text' => 'Mailchimp List ID',
                'value' => ''
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
