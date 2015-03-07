<?php
	/* Ortstafel-svg.php
	 * 
	 * Liefert eine SVG-Ortstafel mit Inhalt
	 * kann auf ein TShirt gedruckt Werden
	 * 
	 * Argumente sind 
	 * 
	 * Textgrößen oben und Unten
	 *      font_size_oben
	 *      font_size_unten
	 * 
	 * Text für oben und unten
	 *     text_oben
	 *     text_unten
	 * 
	 */
	
	if (!(isset($__SERVER['REMOTE_ADDR'])))
	{
		parse_str ($argv[2]);
	}
	
	$my_width=25;
	$my_height=18;
	$distanz_rand=0.75;
	$stroke_whidth=0.5;
	$schrifthoehe_oben=$font_size_oben/48.78;
	$schrifthoehe_unten=$font_size_unten/48.78;
 ?>
<!--
      Distrubted under the CC-BY-SA
      Created whith Ortstafel-SVG
      By FMi2012
      leave this Comment
  -->
<svg
	<?php 
		print ("width=\"${my_width}cm\" "); 
		print ("height=\"${my_height}cm\""); 
	 ?>
	version="1.1" xmlns="http://www.w3.org/2000/svg"> 
	<rect fill="rgb(253, 215, 22)"   width="25cm" height="18cm" rx="1.0cm" ry="1.0cm" />
	
	<line y1="16.5cm" x1="0.75cm" y2="9.5cm" x2="24.5cm"
            stroke-width="1.5cm" stroke="rgb(193, 18, 28)" />
    <rect stroke="rgb(253, 215, 22)" fill="none" x="0.25cm" y="0.25cm" width="24.5cm" height="17.5cm" rx="1.0cm" ry="1.0cm" stroke-width="1.0cm"/>
	<rect x="0.75cm" y="0.75cm" width="23.5cm" height="16.5cm"
        fill="none" stroke="black" stroke-width="0.5cm" rx="0.5cm" ry="0.5cm"/>
     <line y1="9cm" x1="0.75cm" y2="9cm" x2="24.5cm"
            stroke-width="0.5cm" stroke="black" />
            
   <text
     <?php
			$mitte_oben = (($distanz_rand + $stroke_whidth) + ($my_height/2 - $stroke_whidth/2)) / 2;
			# attribute des Textes Oben
			print ("x=\""  . $my_width/2 . "cm\" ");
            print ("y=\"" . (($schrifthoehe_oben / 2) + $mitte_oben) . "cm\" ");
            print ("text-anchor=\"middle\"\n");
            print ("\tfont-family=\"DejaVu Sans\" ");
            print ("font-weight=\"bold\" ");
            print ("font-size=\"" . $font_size_oben . "\" ");
            print ("fill=\"black\" ");
            # schliessende Tag-Klammer
            print (">");
            # Text
            print ($text_oben)
        ?></text>

   <text
     <?php
			$mitte_unten = (($my_height/2 + $stroke_whidth /2) + ($my_height - $distanz_rand - $stroke_whidth)) / 2;
			# attribute des Textes Unten
			print ("x=\"" . $my_width/2 . "cm\" ");
            print ("y=\"" . ( $schrifthoehe_unten / 2  + $mitte_unten ) . "cm\" ");
            print ("text-anchor=\"middle\"\n");
            print ("\tfont-family=\"DejaVu Sans\" ");
            print ("font-weight=\"bold\" ");
            print ("font-size=\"" . $font_size_unten . "\" ");
            print ("fill=\"black\" ");
            # schliessende Tag-Klammer
            print (">");
            # Text
            print ($text_unten)
        ?></text>

</svg>
