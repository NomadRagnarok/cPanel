<?php if (!defined('FLUX_ROOT')) exit; ?>
<div class="indexPage">
	<div class="indexTop">
		<div class="newsArea">
			<h2><?php echo $EADev['serverName']; ?> News Board</h2>
			<?php
				if ( $EADev['enablerss'] ):
					require_once("rsslib.php");
					echo RSS_Display($EADev['news'], 5);
				endif;
			?>
		</div>
		<div class="sliderArea">
			<div>
				<div id="sliderShow">
					<?php foreach ($EADev['sliders'] as $sliders ) { $slider = explode(",", $sliders); ?>
					<div>
						<img src="<?php echo $this->themePath('img/' . $slider[0]); ?>" alt="" />
						<p>
							<?php echo $slider[1]; ?>
						</p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="indexBottom">
		<div class="woeSchdArea">
			<div class="woeSchd"><br/><br/><br/><br/>
				<table cellspacing="0" cellpadding="0">
					<?php foreach ( $EADev['woeSchd'] as $key => $value) { ?>
					<tr>
						<td><?php echo $key; ?></td>
						<td><?php echo $value; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="videoArea">
			<?php echo $EADev['youtube-video']; ?>
		</div>
		<div class="otherButtons">
			<ul>
				<li><a href="<?php echo $this->url('main'); ?>"><img src="<?php echo $this->themePath('img/otherButtons.png'); ?>" alt="Vote"></a></li>
				<li><a href="<?php echo $EADev['rms']; ?>"><img src="<?php echo $this->themePath('img/otherButtons.png'); ?>" alt="Review Us"></a></li>
			</ul>
		</div>
		<div class="faceBook">
			<?php echo '<iframe src="//www.facebook.com/plugins/likebox.php?href= ' . urlencode($EADev['facebook-page']) . '&amp;width=233&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:233px; height:258px;" allowTransparency="true"></iframe>'; ?>
		</div>
		<div class="clear"></div>
	</div>
</div>