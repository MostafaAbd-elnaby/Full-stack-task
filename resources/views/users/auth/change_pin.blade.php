@extends('users.index')
@section('content')
    <section class="content">
        <div class="container">
            <div class="show-enter">
                <p>Change PIN</p>
                <ul>
                    <li data-index="1"></li>
                    <li data-index="2"></li>
                    <li data-index="3"></li>
                    <li data-index="4"></li>
                </ul>
            </div>
            <form class="inputs" action="{{url('log/change')}}" method="POST">
                @csrf
                <div class="container">
                    <div class="buttons-list">
                        <ul>
                            <li><input type="button" value="1"></li>
                            <li><input type="button" value="2"></li>
                            <li><input type="button" value="3"></li>
                            <li><input type="button" value="4"></li>
                            <li><input type="button" value="5"></li>
                            <li><input type="button" value="6"></li>
                            <li><input type="button" value="7"></li>
                            <li><input type="button" value="8"></li>
                            <li><input type="button" value="9"></li>
                            <li><input type="button" value="0"></li>
                        </ul>
                        <input type="text" name="pin" id="pin" required autocomplete="off" >
                    </div>
                    <div class="submit-btns">
                        <input type="button" value="Back">
                        <input type="submit" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
