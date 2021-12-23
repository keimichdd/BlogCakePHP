<h1>Add Article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('category_id', array(
    "placeholder" => "category_id"
));
echo $this->Form->input('title',array(
    "placeholder" => "titulo"
));
echo $this->Form->input('body', array(
    "placeholder" => "corpo",
    'rows' => '3'
));
echo $this->Form->button(__('Salvar artigo'));
echo $this->Form->end();
?>