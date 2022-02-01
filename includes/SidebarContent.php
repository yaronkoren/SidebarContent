<?php
/**
 * Class for the SidebarContent extenion.
 *
 * @author Yaron Koren
 */

class SidebarContent {

	public static function onSkinAfterPortlet( Skin $skin, $name, &$html ) {
		global $wgSidebarContentMessages;

		foreach ( $wgSidebarContentMessages as $location => $messageName ) {
			if ( $name == $location ) {
				$html .= wfMessage( $messageName )->parse();
				break;
			}
		}
		return true;
	}
}
