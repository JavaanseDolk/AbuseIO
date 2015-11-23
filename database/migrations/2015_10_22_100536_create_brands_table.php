<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'brands',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('company_name');
                $table->string('introduction_text');
                $table->binary('logo');
                $table->timestamps();
            }
        );

        $this->addDefaultBrand();
    }

    /**
     * Add the default branding
     */
    public function addDefaultBrand()
    {
        // Always recreate the default branding for the system
        DB::table('brands')->where('id', '=', '1')->delete();

        $abuseio_logo = file_get_contents(base_path('public/images/logo_150.png'));

        $brands = [
            [
                'id'                        => 1,
                'name'                      => 'default',
                'company_name'              => 'AbuseIO',
                'introduction_text'         => 'This is an introduction text',
                'logo'                      => $abuseio_logo
            ],
        ];

        DB::table('brands')->insert($brands);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brands');
    }
}
