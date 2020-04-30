@extends('layouts.default')

@section('content')
        <form>
            <table>
                <tr>
                    <td>
                        <label>Username</label>
                    </td>
                    <td>
                        <input type="text" id="username" value="username">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" id="name" value="name">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Surname</label>
                    </td>
                    <td>
                        <input type="text" id="surname" value="surname">
                    </td>

                </tr>


                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" id="email" value="test@gmail.com">
                    </td>
                </tr>



                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" id="password" value="">
                    </td>
                </tr>


                <tr>
                    <td>
                        <label> Confirm Password</label>
                    </td>
                    <td>
                        <input type="password" id="confirm_password" value="">
                    </td>
                </tr>


                <tr>
                    <td>
                        <input type="submit" value="Complete">
                    </td>
                </tr>

            </table>



        </form>
        @endsection
