<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()         
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('catagory_id');
            $table->integer('subcat_id');
            $table->integer('brand_id');
            $table->string('name');                                                
            $table->string('slug');
            $table->string('model');
            $table->string('description');
            $table->string('buying_price')->nullable;
            $table->string('selling_price')->nullable;
            $table->string('special_price')->nullable;
            $table->date('special_start')->nullable;
            $table->date('special_end')->nullable;
            $table->integer('quantity');
            $table->string('video_url')->nullable;   
            $table->integer('warranty')->default(0);
            $table->integer('duration')->nullable;
            $table->string('condaition')->nullable;
            $table->string('thumbnail');
            $table->string('gallery')->nullable;
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
