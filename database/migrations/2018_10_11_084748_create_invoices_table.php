<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_ref')->nullable();;
            $table->date('invoice_date');
            $table->string('invoice_soldto')->nullable();;
            $table->string('invoice_comapny')->nullable();;
            $table->string('invoice_address')->nullable();;
            $table->string('invoice_port_of_loading');
            $table->string('invoice_port_of_discharge');
            $table->string('invoice_sailed_no')->nullable();;
            $table->string('invoice_ocean_vessel')->nullable();;
            $table->string('invoice_irc_no')->nullable();;
            $table->string('invoice_cover_note')->nullable();;
            $table->string('invoice_latter_of_credit_no')->nullable();;
            $table->string('invoice_country_of_orgin');
            $table->string('invoice_shipping_mark');
            $table->string('invoice_vat_reg_no')->nullable();;
            $table->string('invoice_banks_bin_no')->nullable();;
            $table->string('invoice_hs_code_no')->nullable();;
            $table->string('invoice_lcaf_no_')->nullable();;
            $table->string('invoice_tin_no')->nullable();;
            $table->date('invoice_dated');
            $table->date('invoice_date_of_issue');
            $table->string('invoice_description_of_goods');
            $table->string('invoice_quantity');
            $table->string('invoice_freight');
            $table->string('invoice_unit_price');
            $table->string('invoice_gross_weight');
            $table->string('invoice_total_value');
            $table->string('invoice_total_in_word');
            $table->string('invoice_note')->nullable();
            $table->string('invoice_product_type');
            $table->string('invoice_brand')->nullable();
            $table->string('invoice_chassis_no')->nullable();
            $table->string('invoice_Year_model')->nullable();
            $table->string('invoice_serial_no')->nullable();
            $table->string('invoice_machine_model')->nullable();

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
        Schema::dropIfExists('invoices');
    }
}
