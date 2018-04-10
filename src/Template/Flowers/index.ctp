<h2>Copy text</h2>
<?php
echo $this->Form->create();
echo $this->Form->input('text1', ['type'=>'text','value'=>$var1,'style'=>'width:400px; height:40px;']);
echo $this->Form->button('->', ['type' => 'submit']);
echo $this->Form->input('text2',['type'=>'textarea','value'=>$var2,'style'=>'width:400px; height:80px;']);
echo $this->Form->end();
?>

