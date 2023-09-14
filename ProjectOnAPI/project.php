<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORONA API</title>
    <style>
        body{
            font-family: Arial;
            background-color: pink;
        }
    </style>
</head>
<body><center>
    <table  width="500px" border="2px" cellspasing="0" cellpadding="8px">
        <tr>
            <h1 style="color:green;" colspan="2">Global Data</h1>
        </tr>
        <tbody style="background-color: yellow; color:red;" id="globaldata"></tbody>
    </table><br>
    <table  width="60%" border="2px" cellspasing="0" cellpadding="8px">
        <tr>
            <h1 style="color: red;" colspan="2">Country Wise Data</h1>
        </tr>
        <tr style="background-color: black; color:red">
            <th>S.No.</th>
            <th>Country</th>
            <th>New Confirmed </th>
            <th>New Death</th>
            <th>New Recovered</th>
            <th>Total Confirmed</th>
            <th>Total Deaths</th>
            <th>Total Recovered</th>
        </tr>
        <tbody style="background-color: black; color:white;" id="countrydata"></tbody>
    </table>
    </center>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script type="text/javascript">
$(document).ready(function(){
 
$.ajax({
    url:"https://api.covid19api.com/summary",
    type:"GET",
    datatype:"JSON",
    success: function(data){
        console.log(data);
        console.log(data.Global);
        $.each(data.Global,function(key,value){
            $("#globaldata").append("<tr><td>" + key+"</td><td>"+value +"</td></tr>")

        });
        var sno=1;
        $.each(data.Countries,function(key,value){
            $("#countrydata").append("<tr>"+
                                        "<td>" +sno +"</td>"+
                                        "<td>" + value.Country +"</td>"+
                                        "<td>" + value.NewConfirmed +"</td>"+
                                        "<td>" + value.NewDeaths +"</td>"+
                                        "<td>" + value.NewRecovered +"</td>"+
                                        "<td>" + value.TotalConfirmed +"</td>"+
                                        "<td>" + value.TotalDeaths +"</td>"+
                                        "<td>" + value.TotalRecovered +"</td>"+
                                    "</tr>");
            sno++;
        });
 
    }
});

}
)
</script>
</body>
</html>