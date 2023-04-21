<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Junayed Rahaman">
    <meta name="description" content="Habit Scorecard">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.8.3/dist/paper.min.css">
    <style type="text/css">
      @font-face {
  font-family: 'Pacifico';
  font-style: normal;
  font-weight: 400;
  src: local('Pacifico Regular'), local('Pacifico-Regular'), url(https://fonts.gstatic.com/s/pacifico/v12/FwZY7-Qmy14u9lezJ-6H6MmBp0u-.woff2) format('woff2');
  font-display: swap;
}
        .container{
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
        .inputs{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
        li{
            font-size: 0.4rem;
        }
        h3, p, h2{
            text-align: center;
        }
        p{
            font-size: 1.5rem;
        }
        .box{
          margin-top: 30px;
        }
        .box2{
            margin-top: 30px;
            display: flex;
            justify-content: space-evenly;
            padding: 10px;
        }
        h2{
            margin-bottom: 20px;
        }
        .btn-success{
          content: Done;
        }
        .form-group{
          text-align: center;
        }
        #habitInput{
          width: 60%;
          display: inline-block;
        }
        #habitInputBtn{
          width: 30%;
          display: inline-block;
        }

    </style>
    <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
    <title>Habit Scorecard</title>
</head>
<body>
    <div class="paper container">
        <h2 class="text-success">HABIT SCORECARD</h2>
        <span class="collapsible label"></span>
<h3><button id="leftBtn" onclick="callLBtn()"> < </button> <span id="days">Monday</span>  <button id="rightBtn" onclick="callRBtn()"> > </button></h3>


<div class="form-group">
  <!-- <label for="habitInput">Enter Your Habits</label> -->
  <input type="text" placeholder="Enter Your Habits.." id="habitInput">
  <input onclick="addTable()" type="button" class="btn-primary" id="habitInputBtn" value="Add Habit">
</div>

                <table>
                    <thead>
                      <tr>
                        <th>Count</th>
                        <th>Habits</th>
                        <th>Done/Not Done</th>

                      </tr>
                    </thead>
                    <tbody id="tableAdd">
                      <tr>
                        <td>1</td>
                        <td>Learn Web Dev</td>
                        <td><button id="iBtn">Not Done!</button></td>

                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Learn Automata</td>
                        <td><button id="iBtn">Not Done!</button></td>

                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Learn Microprocessor</td>
                        <td><button id="iBtn">Not Done!</button></td>
                      </tr>

                    </tbody>
                  </table>

                  <div class="box border border-primary"><p class="text-secondary"><span id="scoreView">Monday score: </span><span id="totalScore">0</span></p></div>
                  <div class="box2 border border-primary"><button onclick="window.print()" class="btn-primary">Print Page!</button><button onclick="deleteEntries()" class="btn-primary">Delete Entries!</button></div>
                  
                  <p id="credits">Made with ❤️ by Junayed Rahaman</p>


          </div>

          <script type="text/javascript">
            var days = document.getElementById("days");
            var rightBtn = document.getElementById("rightBtn");
            var leftBtn = document.getElementById("leftBtn");
            var scoreView = document.getElementById("scoreView");
            var count = 0;
            var arr = ['Monday', 'Tuseday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            function callRBtn(){
            if(count < 6){
            count = count + 1;
            }
            days.textContent = arr[count];
            scoreView.textContent = arr[count] + " score: ";
        }
            function callLBtn(){
                if(count > 0){
                count = count - 1;
                }
                days.textContent = arr[count];
                scoreView.textContent = arr[count] + " score: ";
        }
        var score = 0;
        var totalScore = 0;
        
        var tScore = document.getElementById("totalScore");
        
        var tableAdd = document.getElementById("tableAdd");

        

    function addTable(){
      var habitInput = document.getElementById("habitInput").value;
      if(habitInput != ""){
      tableAdd.innerHTML += "<tr><td>" + Number(tableAdd.childElementCount + 1) + "</td><td>"+ habitInput +"</td><td><button id='iBtn'>Not Done!</button></td></tr>";
      var Btns = document.querySelectorAll("#iBtn");
      for(var i=0; i<Btns.length; i++){
        Btns[i].addEventListener("click", function(){
        this.classList.toggle('btn-success');
        if(this.textContent == "Done!")
          this.textContent = "Not Done!";
        else
          this.textContent ="Done!";
        
        var countBtn = document.querySelectorAll(".btn-success");
        var result = Math.trunc(10*countBtn.length);
        tScore.textContent = result + "/"  + Number(tableAdd.childElementCount*10);
      });
    }

    }    
  }

  function deleteEntries(){
    tableAdd.innerHTML = "";
    tScore.textContent = 0;
  }



    

          </script>
</body>
</html>