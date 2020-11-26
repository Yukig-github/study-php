
<form action="#" method="post">
<select name="count">
  <?php
    for($i=0; $i<10; $i++){
        echo '<option value "',$i,'">','</option>';
    }  
  ?>
</select>
<p><input type="submit" vakue="ok"></p>
</form>

<form action="＃" method="post">
<select name="question">
  <?php
  $question=[
    '1',
    '2',
    '3',
    '4'
  ];

  foreach ($question as $item) {
    echo '<option value="', $item, '">', $item, '</option>';
  }
  ?>
  </select>

  <p>質問の回答</p>
  <p><input type="text" name="ans"></p>
  <p><input type="submit" value="ok"></p>
</form>

<form action="#" method="post">
<select name="code">
  <?php
  $store=[
    '1'=>100,
    '2'=>200,
    '3'=>300,
    '4'=>400
  ];
  foreach ($store as $key=>$value){
    echo '<option value="',$value,'">',$key,'</option>';
  }

  ?>
</select>
<p><input type="submit" value="ok"></p>
</form>

