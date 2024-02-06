@extends('layouts')
@section('content')
    <div class="demo">
        <div class="heading">
            <h2>Schedule a Demo</h2>
        </div>

        <form>
            <div class="controlGrp">
                <div class="name">
                    <label for="name">Name :</label>
                    <input type="text">
                </div>
                <div class="email">
                    <label for="email">Email :</label>
                    <input type="email">
                </div>

            </div>

            <div class="selectGrp">
                <label>Users you want to use HivoCall for ?</label>
                <select>
                    <option value="Just me">Just me</option>
                    <option value="2-4 users">2-4 users</option>
                    <option value="5-20 users">5-20 users</option>
                    <option value="21-49 users">21-49 users</option>
                    <option value="50+ users">50+ users</option>
                </select>
            </div>
            <div class="selectGrp">
                <label>Countries you will be making calls? </label>
                <select>
                    <option value="Multi">Multiple Countries</option>
                    <option value="US/CA">US/CA</option>
                    <option value="UK">UK</option>
                    <option value="AUS">Australia</option>
                    <option value="IN">India</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <button>
                Select your Date & Time
            </button>
        </form>
    </div>
@endsection
