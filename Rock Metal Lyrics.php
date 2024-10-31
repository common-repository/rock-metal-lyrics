<?php
/**
 * @package Rock & Metal Lyrics
 * @version 0.0.2
 */
/*
Plugin Name: Rock & Metal Lyrics
Author: Ahmed Khelifi
Author Website: http://www.ahmedkhelifi.com

Description: The one plugin you need to rock your account even more! A more hardcore version of the famous "Hello Dolly". Displays meaningful Metal & Rock lyrics.
Version: 0.0.2
*/

function rock_metal_lyrics_content() {
	$lyrics = "Die, Die, Die my darling
What do you mean I don't support your system? I go to court when I have to
Maybe it's not too late, to learn how to love and forget how to hate
There are so many of us here and we are all so lonely
He had his fist up in the air and called me brother
The fools are kings, tearing apart the soul
Faster than a laser bullet, Louder than an atom bomb
Take a look to the sky just before you die, It is the last time you will
He hears the silence so loud, Crack of dawn, all is gone except the will to be
The longer I live the more I'm dying to feel the pain... EATEN...
What do you mean I ain't kind? I'm just not your kind
Out in the madness, the all-seeing eye, Flickers above us, to light up the sky
Oh well, wherever, wherever you are, Iron Maiden's gonna get you, no matter how far
Get ready to stand and fight for your lives, Judgement day has come around
Bring your daughter, bring your daughter to the slaughter, Let her go, let her go!
It's a long way to the top, if you wanna rock n roll
And I am not afraid of dying, why should I be? We all gotta go sometime
Hero not the glamour girl who'd love to sell her soul
Now I think I understand, how the world can overcome a man
Just because you feel it doesn't mean it's there
Freedom, well, that's just some people talking
We're just two lost souls swimming in a fish bowl
If we were blind and had no choice, would we hate each other by the tone of our voice?
If you choose not to decide, you still have made a choice
And in the end, the love you take is equal to the love you make
And in the end, the love you take is equal to the love you make
It's better to burn out, than to fade away";
	
	$lyrics = explode( "\n", $lyrics );

	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

function this_prints_Rock_lyrics_to_screen() {
	$display_rock_metal_lyrics = rock_metal_lyrics_content();
	echo "<p id='hardcore'>$display_rock_metal_lyrics</p>";
}
add_action( 'admin_notices', 'this_prints_Rock_lyrics_to_screen' );

function rock_metal_lyrics_align_css() {
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#hardcore {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 12px;
	}
	</style>
	";
}

add_action( 'admin_head', 'rock_metal_lyrics_align_css' );
?>
