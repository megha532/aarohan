
@extends('layout.master')
@section('title')
  Welcome !
@endsection

@section('content')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
    <script type="text/javascript">
        //when the webpage has loaded do this
        $(document).ready(function() {  
            //if the value within the dropdown box has changed then run this code            
            $('#num_cat').change(function(){
                //get the number of fields required from the dropdown box
                var num = $('#num_cat').val();                  

                var i = 0; //integer variable for 'for' loop
                var html = ''; //string variable for html code for fields 
                //loop through to add the number of fields specified
                for (i=1;i<=num;i++) {
                    //concatinate number of fields to a variable
                    html += 'Student Name ' + i + ': <input type="text" name="s_name-' + i + '"/>'; 
                    html += 'Registration Id ' + i + ': <input type="text" name="registration-' + i + '"/><br/>';
                }

                //insert this html code into the div with id catList
                $('#catList').html(html);
            });
        }); 
    </script>

<center>
    <div class="row">
        <div class="col-md-6">
            <h2><u>Registration Of Group Events</u></h2>
            <form action="#" method="post">
                <a href="{{URL::to('/')}}"><img src={{asset('image/sports.jpg')}} alt="Logo"></a><br>
                  <label><u><h3>Sports Event</h3></u></label><br><br>
                <div class="form-group">
                    <label for="e_name"> Event Name</label>
                    <input type="text" name="e_name" id="e_name" >
                 </div>
                <div class="form-group">
                    <label for="t_size"> Team size</label>
                    <select id="num_cat" name="num_cat">
            <option value="0">- SELECT -</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>

        <div id="catList"></div>

                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</center>
@endsection


