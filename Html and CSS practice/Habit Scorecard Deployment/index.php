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
        h2{
            margin-bottom: 20px;
        }
        .btn-success{
          content: Done;
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
                <table>
                    <thead>
                      <tr>
                        <th>Count</th>
                        <th>Habits</th>
                        <th>Done/Not Done</th>

                      </tr>
                    </thead>
                    <tbody>
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
                      <tr>
                        <td>4</td>
                        <td>Learn Internet Texhnology</td>
                        <td><button id="iBtn">Not Done!</button></td>

                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Play At BSS Ground</td>
                        <td><button id="iBtn">Not Done!</button></td>

                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Read Books</td>
                        <td><button id="iBtn">Not Done!</button></td>

                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Eat Healthy</td>
                        <td><button id="iBtn">Not Done!</button></td>

                      </tr>

                    </tbody>
                  </table>

                  <div class="box border border-primary"><p class="text-secondary"><span id="scoreView">Monday score: </span><span id="totalScore">0</span></p></div>
                  <div class="box border border-primary"><p class="text-success"><button onclick="window.print()" class="btn-primary">Print Page!</button></p></div>
                  <p>Made with ❤️ by Junayed Rahaman</p>

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
        var Btns = document.querySelectorAll("#iBtn");
        var tScore = document.getElementById("totalScore");
        
        


        for(var i=0; i<Btns.length; i++){
        Btns[i].addEventListener("click", function(){
        this.classList.toggle('btn-success');
        if(this.textContent == "Done!")
          this.textContent = "Not Done!";
        else
          this.textContent ="Done!";
        
        var count = document.querySelectorAll(".btn-success");
        var result = Math.trunc(10*count.length/70*100);
        tScore.textContent = result + "%";
      });
    }
    

          </script>
</body>
</html>