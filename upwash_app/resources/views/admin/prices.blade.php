@extends('layouts.layadmin')

@section('content')

<form action="{{ route('setPrice') }}" method="post">
    @csrf
    <div class="row">
        <h1>Hinnat</h1>
    </div>

    <div class="row">
        <h3>Step 1</h3>
        <div class="button" v-on:click="show(1)">Show</div>
        <div class="price-block" v-bind:class="{active: step == 1}">
            <div class="row">
                <label for="step1_1">Ulkopesu</label><input type="text" name="step1_1" id="step1_1" value="{{ $data->step1_1 }}">
            </div>
            <div class="row">
                <label for="step1_2">Sisäpesu</label><input type="text" name="step1_2" id="step1_2" value="{{ $data->step1_2 }}">
            </div>
            <div class="row">
                <label for="step1_3">Molemmat</label><input type="text" name="step1_3" id="step1_3" value="{{ $data->step1_3 }}">
            </div>
        </div>
    </div>

    <div class="row">
        <h3>Step 3</h3>
        <div class="button" v-on:click="show(3)">Show</div>
        <div class="price-block" v-bind:class="{active: step == 3}">
            <div class="row">
                <label for="step3_1">PREMIUM</label><input type="text" name="step3_1" id="step3_1" value="{{ $data->step3_1 }}">
            </div>
            <div class="row">
                <label for="step3_2">STANDARD</label><input type="text" name="step3_2" id="step3_2" value="{{ $data->step3_2 }}">
            </div>
            <div class="row">
                <label for="step3_3">YRITYKSILLE </label><input type="text" name="step3_3" id="step3_3" value="{{ $data->step3_3 }}">
            </div>
        </div>
    </div>

    <div class="row">
        <h3>Step 4</h3>
        <div class="button" v-on:click="show(4)">Show</div>
        <div class="price-block" v-bind:class="{active: step == 4}">
            <div class="row">
                <label for="step4_1">SEDAN</label><input type="text" name="step4_1" id="step4_1" value="{{ $data->step4_1 }}">
            </div>
            <div class="row">
                <label for="step4_2">FARMARI</label><input type="text" name="step4_2" id="step4_2" value="{{ $data->step4_2 }}">
            </div>
            <div class="row">
                <label for="step4_3">PATTIAUTO (KORKEA)</label><input type="text" name="step4_3" id="step4_3" value="{{ $data->step4_3 }}">
            </div>
            <div class="row">
                <label for="step4_4">PATTIAUTO (MATALA)</label><input type="text" name="step4_4" id="step4_4" value="{{ $data->step4_4 }}">
            </div>
            <div class="row">
                <label for="step4_5">MASSTOAUTO</label><input type="text" name="step4_5" id="step4_5" value="{{ $data->step4_5 }}">
            </div>
        </div>
    </div>

    <div class="row">
        <h3>Step 5</h3>
        <div class="button" v-on:click="show(5)">Show</div>
        <div class="price-block" v-bind:class="{active: step == 5}">
            <div class="row">
                <label for="step5_1">Hyönteistenpoisto</label><input type="text" name="step5_1" id="step5_1" value="{{ $data->step5_1 }}">
            </div>
            <div class="row">
                <label for="step5_2">Karvojenpoisto </label><input type="text" name="step5_2" id="step5_2" value="{{ $data->step5_2 }}">
            </div>
            <div class="row">
                <label for="step5_3">Renkaiden vaihto 11€</label><input type="text" name="step5_3" id="step5_3" value="{{ $data->step5_3 }}">
            </div>
            <div class="row">
                <label for="step5_4">None</label><input type="text" name="step5_4" id="step5_4" value="{{ $data->step5_4 }}">
            </div>

        </div>
    </div>
    <div class="row">
        <h3>Step 6</h3>
        <div class="button" v-on:click="show(6)">Show</div>
        <div class="price-block" v-bind:class="{active: step == 6}" style="height: inherit !important;">
            <div class="row" style="margin-bottom: 20px">
                <div><label for="step6_1">Ulkopesu #1</label><input type="text" name="ulk1" id="step6_1" value="{{ $data->ulk1 }}"></div>
                <div><label for="step6_1">Ulkopesu #1 (minuuttia)</label><input type="text" name="ulk1_time"  value="{{ $data->ulk1_time }}"></div>
                <div><label for="step6_2">Ulkopesu #2</label><input type="text" name="ulk2" id="step6_2" value="{{ $data->ulk2 }}"></div>
                <div><label for="step6_2">Ulkopesu #2 (minuuttia)</label><input type="text" name="ulk2_time" value="{{ $data->ulk2_time }}"></div>
                <div><label for="step6_3">Ulkopesu #3</label><input type="text" name="ulk3" id="step6_3" value="{{ $data->ulk3 }}"></div>
                <div><label for="step6_3">Ulkopesu #3 (minuuttia)</label><input type="text" name="ulk3_time" value="{{ $data->ulk3_time }}"></div>

                <div><label for="step6_4">Sisäpesu #1</label><input type="text" name="sis1" id="step6_4" value="{{ $data->sis1 }}"></div>
                <div><label for="step6_4">Sisäpesu #1 (minuuttia)</label><input type="text" name="sis1_time" value="{{ $data->sis1_time }}"></div>
                <div><label for="step6_5">Sisäpesu #2</label><input type="text" name="sis2" id="step6_5" value="{{ $data->sis2 }}"></div>
                <div><label for="step6_5">Sisäpesu #2 (minuuttia)</label><input type="text" name="sis2_time" value="{{ $data->sis2_time }}"></div>
                <div><label for="step6_6">Sisäpesu #3</label><input type="text" name="sis3" id="step6_6" value="{{ $data->sis3 }}"></div>
                <div><label for="step6_6">Sisäpesu #3 (minuuttia)</label><input type="text" name="sis3_time" value="{{ $data->sis3_time }}"></div>

                <div><label for="step6_7">SISÄPESU + ULKOPESU #1</label><input type="text" name="mol1" id="step6_7" value="{{ $data->mol1 }}"></div>
                <div><label for="step6_7">SISÄPESU + ULKOPESU #1 (minuuttia)</label><input type="text" name="mol1_time" value="{{ $data->mol1_time }}"></div>
                <div><label for="step6_8">SISÄPESU + ULKOPESU #2</label><input type="text" name="mol2" id="step6_8" value="{{ $data->mol2 }}"></div>
                <div><label for="step6_8">SISÄPESU + ULKOPESU #2 (minuuttia)</label><input type="text" name="mol2_time" value="{{ $data->mol2_time }}"></div>
                <div><label for="step6_9">SISÄPESU + ULKOPESU #3</label><input type="text" name="mol3" id="step6_9" value="{{ $data->mol3 }}"></div>
                <div><label for="step6_9">SISÄPESU + ULKOPESU #3 (minuuttia)</label><input type="text" name="mol3_time" value="{{ $data->mol3_time }}"></div>
                <div class="hidden_inputs" style="display: none;">
                    <div>
                        <input type="text" id="sis1_1" name="sis1_1" value="{{ $data->sis1_1 }}">
                        <input type="text" id="sis1_2" name="sis1_2" value="{{ $data->sis1_2 }}">
                        <input type="text" id="sis1_3" name="sis1_3" value="{{ $data->sis1_3 }}">
                        <input type="text" id="sis1_4" name="sis1_4" value="{{ $data->sis1_4 }}">
                        <input type="text" id="sis1_5" name="sis1_5" value="{{ $data->sis1_5 }}">
                        <input type="text" id="sis1_6" name="sis1_6" value="{{ $data->sis1_6 }}">
                        <input type="text" id="sis1_7" name="sis1_7" value="{{ $data->sis1_7 }}">
                        <input type="text" id="sis1_8" name="sis1_8" value="{{ $data->sis1_8 }}">
                        <input type="text" id="sis1_9" name="sis1_9" value="{{ $data->sis1_9 }}">
                        <input type="text" id="sis1_10" name="sis1_10" value="{{ $data->sis1_10 }}">
                        <input type="text" id="sis1_11" name="sis1_11" value="{{ $data->sis1_11 }}">
                        <input type="text" id="sis1_12" name="sis1_12" value="{{ $data->sis1_12 }}">
                    </div>
                    <div>
                        <input type="text" id="sis2_1" name="sis2_1" value="{{ $data->sis2_1 }}">
                        <input type="text" id="sis2_2" name="sis2_2" value="{{ $data->sis2_2 }}">
                        <input type="text" id="sis2_3" name="sis2_3" value="{{ $data->sis2_3 }}">
                        <input type="text" id="sis2_4" name="sis2_4" value="{{ $data->sis2_4 }}">
                    </div>
                    <div>
                        <input type="text" id="sis3_1" name="sis3_1" value="{{ $data->sis3_1 }}">
                        <input type="text" id="sis3_2" name="sis3_2" value="{{ $data->sis3_2 }}">
                        <input type="text" id="sis3_3" name="sis3_3" value="{{ $data->sis3_3 }}">
                    </div>
                    <div>
                        <input type="text" id="ulk1_1" name="ulk1_1" value="{{ $data->ulk1_1 }}">
                        <input type="text" id="ulk1_2" name="ulk1_2" value="{{ $data->ulk1_2 }}">
                        <input type="text" id="ulk1_3" name="ulk1_3" value="{{ $data->ulk1_3 }}">
                        <input type="text" id="ulk1_4" name="ulk1_4" value="{{ $data->ulk1_4 }}">
                        <input type="text" id="ulk1_5" name="ulk1_5" value="{{ $data->ulk1_5 }}">
                        <input type="text" id="ulk1_6" name="ulk1_6" value="{{ $data->ulk1_6 }}">
                        <input type="text" id="ulk1_7" name="ulk1_7" value="{{ $data->ulk1_7 }}">
                        <input type="text" id="ulk1_8" name="ulk1_8" value="{{ $data->ulk1_8 }}">
                        <input type="text" id="ulk1_9" name="ulk1_9" value="{{ $data->ulk1_9 }}">
                        <input type="text" id="ulk1_10" name="ulk1_10" value="{{ $data->ulk1_10 }}">
                        <input type="text" id="ulk1_11" name="ulk1_11" value="{{ $data->ulk1_11 }}">
                    </div>
                     <div>
                        <input type="text" id="ulk2_1" name="ulk2_1" value="{{ $data->ulk2_1 }}">
                        <input type="text" id="ulk2_2" name="ulk2_2" value="{{ $data->ulk2_2 }}">
                        <input type="text" id="ulk2_3" name="ulk2_3" value="{{ $data->ulk2_3 }}">
                        <input type="text" id="ulk2_4" name="ulk2_4" value="{{ $data->ulk2_4 }}">
                        <input type="text" id="ulk2_5" name="ulk2_5" value="{{ $data->ulk2_5 }}">
                        <input type="text" id="ulk2_6" name="ulk2_6" value="{{ $data->ulk2_6 }}">
                        <input type="text" id="ulk2_7" name="ulk2_7" value="{{ $data->ulk2_7 }}">
                        <input type="text" id="ulk2_8" name="ulk2_8" value="{{ $data->ulk2_8 }}">
                        <input type="text" id="ulk2_9" name="ulk2_9" value="{{ $data->ulk2_9 }}">
                        <input type="text" id="ulk2_10" name="ulk2_10" value="{{ $data->ulk2_10 }}">
                    </div>
                    <div>
                        <input type="text" id="ulk3_1" name="ulk3_1" value="{{ $data->ulk3_1 }}">
                        <input type="text" id="ulk3_2" name="ulk3_2" value="{{ $data->ulk3_2 }}">
                        <input type="text" id="ulk3_3" name="ulk3_3" value="{{ $data->ulk3_3 }}">
                        <input type="text" id="ulk3_4" name="ulk3_4" value="{{ $data->ulk3_4 }}">
                    </div>
                    <div>
                        <input type="text" id="mol1_1" name="mol1_1" value="{{ $data->mol1_1 }}">
                        <input type="text" id="mol1_2" name="mol1_2" value="{{ $data->mol1_2 }}">
                        <input type="text" id="mol1_3" name="mol1_3" value="{{ $data->mol1_3 }}">
                        <input type="text" id="mol1_4" name="mol1_4" value="{{ $data->mol1_4 }}">
                    </div>
                    <div>
                        <input type="text" id="mol2_1" name="mol2_1" value="{{ $data->mol2_1 }}">
                        <input type="text" id="mol2_2" name="mol2_2" value="{{ $data->mol2_2 }}">
                        <input type="text" id="mol2_3" name="mol2_3" value="{{ $data->mol2_3 }}">
                        <input type="text" id="mol2_4" name="mol2_4" value="{{ $data->mol2_4 }}">
                    </div>
                    <div>
                        <input type="text" id="mol3_1" name="mol3_1" value="{{ $data->mol3_1 }}">
                        <input type="text" id="mol3_2" name="mol3_2" value="{{ $data->mol3_2 }}">
                    </div>
                </div>
                <div class="ac__item">
                        
                        <h6>Perus Sisäpesu</h6>
                        <label>8:00-9:00<input type="checkbox"  onclick="activate_hiding(this);" class="sis1_1"></label>
                        <label>9:00-10:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_2"></label>
                        <label>10:00-11:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_3"></label>
                        <label>11:00-12:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_4"></label>
                        <label>12:00-13:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_5"></label>
                        <label>13:00-14:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_6"></label>
                        <label>14:00-15:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_7"></label>
                        <label>15:00-16:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_8"></label>
                        <label>16:00-17:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_9"></label>
                        <label>17:00-18:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_10"></label>
                        <label>18:00-19:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_11"></label>
                        <label>19:00-20:00<input type="checkbox" onclick="activate_hiding(this);" class="sis1_12"></label>
                    </div>

                    <div class="ac__item">
                        <h6>Sisäpesu Premium</h6>
                        <label>8:00-10:30<input type="checkbox" onclick="activate_hiding(this);" class="sis2_1"></label>
                        <label>10:30-14:00<input type="checkbox" onclick="activate_hiding(this);" class="sis2_2"></label>
                        <label>14:00-16:30<input type="checkbox" onclick="activate_hiding(this);" class="sis2_3"></label>
                        <label>16:30-19:00<input type="checkbox" onclick="activate_hiding(this);" class="sis2_4"></label>
                    </div>
                    
                    <div class="ac__item">
                        <h6>Lux Sisäpesu</h6>
                        <label>8:00-12:00<input type="checkbox" onclick="activate_hiding(this);" class="sis3_1"></label>
                        <label>12:00-16:00<input type="checkbox" onclick="activate_hiding(this);" class="sis3_2"></label>
                        <label>16:00-20:00<input type="checkbox" onclick="activate_hiding(this);" class="sis3_3"></label>
                    </div>
                    
                
                    <div class="admin-new-row"><h4>Ulkopesu</h4>
                        <div class="ac__item">
                            <h6>Ulkopesu + Vaha</h6>
                            <label>8:00-9:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_1"></label>
                            <label>9:00-10:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_2"></label>
                            <label>11:00-12:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_3"></label>
                            <label>12:00-13:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_4"></label>
                            <label>13:00-14:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_5"></label>
                            <label>14:00-15:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_6"></label>
                            <label>15:00-16:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_7"></label>
                            <label>16:00-17:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_8"></label>
                            <label>17:00-18:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_9"></label>
                            <label>18:00-19:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_10"></label>
                            <label>19:00-20:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk1_11"></label>
                        </div>
                        <div class="ac__item">
                            <h6>Ulkopesu Pro</h6>
                            <label>8:00-9:15<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_1"></label>
                            <label>9:15-10:30<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_2"></label>
                            <label>10:30-11:45<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_3"></label>
                            <label>11:45-13:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_4"></label>
                            <label>13:00-14:15<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_5"></label>
                            <label>14:15-15:30<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_6"></label>
                            <label>15:30-16:45<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_7"></label>
                            <label>16:45-18:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_8"></label>
                            <label>18:00-19:15<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_9"></label>
                            <label>19:15-20:30<input type="checkbox" onclick="activate_hiding(this);" class="ulk2_10"></label>
                        </div>
                        
                        <div class="ac__item">
                            <h6>Ulkopesu + Keramiinen pinnoite</h6>
                            <label>8:00-10:30<input type="checkbox" onclick="activate_hiding(this);" class="ulk3_1"></label>
                            <label>10:30-14:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk3_2"></label>
                            <label>14:00-16:30<input type="checkbox" onclick="activate_hiding(this);" class="ulk3_3"></label>
                            <label>16:30-19:00<input type="checkbox" onclick="activate_hiding(this);" class="ulk3_4"></label>
                        </div>
                        
                    </div>
                    <div class="admin-new-row">
                        <h4>Molemmat</h4>
                        <div class="ac__item"><h6>Perus Molemmat</h6>
                        <label>8:00-10:30<input type="checkbox" onclick="activate_hiding(this);" class="mol1_1"></label>
                            <label>10:30-14:00<input type="checkbox" onclick="activate_hiding(this);" class="mol1_2"></label>
                            <label>14:00-16:30<input type="checkbox" onclick="activate_hiding(this);" class="mol1_3"></label>
                            <label>16:30-19:00<input type="checkbox" onclick="activate_hiding(this);" class="mol1_4"></label>
                        </div>
                        <div class="ac__item"><h6>Molemmat Pro</h6>
                            <label>8:00-11:00<input type="checkbox" onclick="activate_hiding(this);" class="mol2_1"></label>
                            <label>11:00-14:00<input type="checkbox" onclick="activate_hiding(this);" class="mol2_2"></label>
                            <label>14:00-17:00<input type="checkbox" onclick="activate_hiding(this);" class="mol2_3"></label>
                            <label>17:00-20:00<input type="checkbox" onclick="activate_hiding(this);" class="mol2_4"></label>
                        </div>
                        <div class="ac__item"><h6>All in Lux</h6>
                            <label>8:00-13:00<input type="checkbox" onclick="activate_hiding(this);" class="mol3_1"></label>
                            <label>13:00-18:00<input type="checkbox" onclick="activate_hiding(this);" class="mol3_2"></label>
                        </div>
                    </div>
                    <div class="admin-new-row"><h4>Renkaiden vaihto</h4>
                        <div class="ac__item"><h6>Renk. vaihto</h6>
                            <label>8:00-8:45<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>8:45-10:30<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>10:30-11:15<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>11:15-12:00<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>12:00-12:45<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>12:45-13:30<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>13:30-14:15<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>14:15-15:00<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>15:00-16:45<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>16:45-17:30<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>17:30-18:15<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>18:15-19:00<input type="checkbox" onclick="activate_hiding(this);" ></label>
                            <label>19:00-19:45<input type="checkbox" onclick="activate_hiding(this);" ></label>
                        </div>
                    </div>
            </div>

        </div>
    </div>

    <input type="submit" value="Save" style="margin: 20px auto;text-align: center;background: orange;padding: 11px 9px;border-radius: 10px;display: block;border: unset;">
</form>

<script type="text/javascript">
    function activate_hiding(arg) {
        if(arg.checked) {
            id = arg.className;
            document.querySelector("#" + id).value = "1";
        }

        else {
            id = arg.className;
            document.querySelector("#" + id).value = "0";
        }
    }

    window.onload = function () {
        inputs = document.querySelectorAll(".hidden_inputs input");
        inputs.forEach(myFunction);

        function myFunction(item) {
            if (item.value == 1) {
                document.querySelector("." + item.id).checked = true;
            }
            
        }
        
    }
</script>

@endsection
