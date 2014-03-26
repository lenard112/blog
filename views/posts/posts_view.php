<script type="text/javascript">
    function clickme() {
        $.post("<?=BASE_URL?>welcome", $( "#ajax-form" ).serialize(), function (data) {
            $(".result").html(data);
        });
    }
</script>

<div class="span8">
	<h1><?=$post["post_subject"]?></h1>
	<p><?=$post["post_text"]?></p>
	<div>
		<span class="badge badge-success">Posted <?=$post["post_created"]?></span>
        <span class="badge badge-success">By <?=$post["username"]?></span>
        <div class="pull-right">
            <?foreach ($tags as $tag):?>
				<a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><span class = "label" style="background-color: #5bc0de"><?=$tag['tag_name']?></span></a>
			<?endforeach?></div>
	</div>
	<hr>
</div>

<?foreach($comments as $comment):?>
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="..." alt="...">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><?=$post["username"]?></h4>
        <?=$comment["comment_text"]?>
    </div>
</div>
<?endforeach?>