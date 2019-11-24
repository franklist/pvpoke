<?php require_once 'header.php'; ?>

<div class="section home white">
	<p>Welcome to PvPoke.com! We're an open-source tool for simulating, ranking, and building teams for Pokemon GO PvP (player versus player) battles. Check out the links below to get started.</p>

	<a href="<?php echo $WEB_ROOT; ?>battle/" class="button">
		<h2 class="icon-battle">Battle</h2>
		<p>Simulate a battle between two custom Pokemon.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>train/" class="button">
		<h2 class="icon-train">Train</h2>
		<p>Play real-time battle simulations against a CPU opponent.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>rankings/" class="button">
		<h2 class="icon-rankings">Rankings</h2>
		<p>Explore the rankings, movesets, and counters for the top Pokemon in each league.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>team-builder/" class="button">
		<h2 class="icon-team">Team Builder</h2>
		<p>Build your own team and see their type matchups and potential counters.</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>contribute/" class="button">
		<h2 class="icon-contribute">Contribute</h2>
		<p>Check out the source code on Github or lend your support through Patreon.</p>
	</a>

	<!--Update section for updates-->
	<h3>What's New</h3>

	<h4>v1.12.10 (November 23rd, 2019)</h4>
	<ul>
		<li>Tweaked AI shielding behavior so it is less likely to enter a shield deficit</li>
		<li>Fixed an issue where Pokemon would ignore AI's farming behavior and use Charged Moves on low HP opponents</li>
		<li>Pokemon with Skull Bash will now usually go for straight Skull Bash instead of attempting shield baits</li>
	</ul>

	<h4>v1.12.9 (November 21st, 2019)</h4>
	<ul>
		<li>Custom moves can now be added for Pokemon selected for groups, including Multi-Battle, Matrix Battle, and Training Battles</li>
		<li>Fixed an issue with Sandbox Mode where the same actions would produce different between Sandbox Mode and the default sims</li>
		<ul>
			<li>There was an issue with cooldowns being reset after Charged Moves that allowed Pokemon to use ineligible Fast Moves on the same turn as a Charged Move in Sandbox Mode</li>
		</ul>
	</ul>

	<h4>v1.12.8 (November 19th, 2019)</h4>
	<ul>
		<li>Pokemon movesets are now listed in Matrix Battle results</li>
		<li>Added an option in the <a href="<?php echo $WEB_ROOT; ?>settings/">Settings</a> to switch Matrix Battle results and Team Builder results to display column vs. row instead of row vs. column.</li>
		<li>Fixed styling issues when entering Pokemon IV's on mobile</li>
		<li>Updated default IV's for the Castforms (they were previously 1463 CP)</li>
	</ul>

	<p>Follow on <a href="https://twitter.com/pvpoke" target="_blank">Twitter</a> for the latest news and updates!</p>

	<h3>Latest Article</h3>

	<div class="article-item flex">
		<div class="col-3">
			<a href="<?php echo $WEB_ROOT; ?>articles/cliffhanger-team-building/">
				<img src="<?php echo $WEB_ROOT; ?>assets/articles/cliffhanger-thumb.jpg" />
			</a>
		</div>
		<div class="col-9">
			<h4><a href="<?php echo $WEB_ROOT; ?>articles/cliffhanger-team-building/">Team Building for GO Stadium Cliffhanger</a></h4>
			<div class="date"> September 7, 2019</div>
			<p>GO Stadium has introduced an exciting new format called Cliffhanger! Learn how to spend your points and build your Cliffhanger team from the ground up.</p>
		</div>
	</div>

</div>

<?php require_once 'footer.php'; ?>
