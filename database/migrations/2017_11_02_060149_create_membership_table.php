<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->string('category', 191)->nullable();
            // $table->text('sector_engaged', 65535);
            $table->text('sector_engaged');
            $table->string('name_applicant', 191)->nullable();
            $table->string('number_applicant', 191)->nullable();
            $table->string('mobile', 191)->nullable();
            $table->string('zone', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('district', 191)->nullable();
            $table->string('pincode', 191)->nullable();
            $table->string('stdCode', 191)->nullable();
            $table->string('telephone', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('gst_no', 191)->nullable();
            $table->text('office_address', 65535);
            $table->text('correspondence_office_address', 65535);
            $table->text('business_location', 65535);
            $table->text('affiliations_supports', 65535);
            $table->string('name_directors', 191)->nullable();
            $table->string('year_incorporation', 191)->nullable();
            $table->string('permanent_full_Time_Employees', 191)->nullable();
            $table->string('membership_affiliation', 191)->nullable();
            $table->text('fqp_id', 65535)->nullable();
            $table->text('new_fqp_id', 65535)->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('member_name', 191);
            $table->string('member_mobile', 191);
            $table->string('member_email', 191);
            $table->string('member_designation', 191);
            $table->string('member_organization', 191);
            $table->boolean('codeofethics')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('memberships');
    }
}
