<?php

use Illuminate\Database\Migrations\Migration;

class AddUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name'=>'Axel Felipe',
			'bio'=>'laravel na',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Axelbhoi',
			'bio'=>'laravel na isa pa',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));		
		DB::table('authors')->insert(array(
			'name'=>'Axel2',
			'bio'=>'laravel na',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Axelbhoi2',
			'bio'=>'laravel na isa pa',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));	
		DB::table('authors')->insert(array(
			'name'=>'Axel3',
			'bio'=>'laravel na',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Axelbhoi3',
			'bio'=>'laravel na isa pa',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));					
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Axel Felipe')->delete();
		DB::table('authors')->where('name','=','Axelbhoi')->delete();
		DB::table('authors')->where('name','=','Axel2')->delete();
		DB::table('authors')->where('name','=','Axelbhoi2')->delete();
		DB::table('authors')->where('name','=','Axel3')->delete();
		DB::table('authors')->where('name','=','Axelbhoi3')->delete();				
	}

}