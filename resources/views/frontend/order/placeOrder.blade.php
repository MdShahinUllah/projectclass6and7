@extends('layouts.frontend')
@section('home')

    <form>
        <div style="width:80%; margin: 50px auto">
            <div class="form-group">
                <label for="exampleFormControlInput1">Full name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="+880">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address"  id="address" class="form-control"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="exampleFormControlSelect1">Payment</label>
                    <select class="form-control" name="payment_method" id="exampleFormControlSelect1">
                        <option>Bkash</option>
                        <option>Nagad</option>
                        <option>Rocket</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="transid">TrxID</label>
                        <input class="form-control" name="TrxID" id="transid" placeholder="TrxID">
                    </div>

                </div>

            </div>

        </div>
    </form>


@stop
