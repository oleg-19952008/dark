<?php 
$rank = $base->GetRank($Users->DataRow['ID'], $Users->DataRow['playerID']);
$mRy = $rnk->getMyRanking($Users->DataRow['playerID']);
$myRanking = $mRy[0];
$clan->setId($Users->DataRow['ID'], $Users->DataRow['playerID']);
$clanid = $clan->getMyClan($Users->DataRow['playerID']);
?>
</head>
<body onLoad="" >
<!-- affiliateStartTag -->



<!.. user context info layer -->
<div id="userInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- hangar context info layer -->
<div id="hangarInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- clan info layer -->
<div id="clanInfoLayer" style="display:none;position:absolute;z-index:100;"></div>
<!-- seitenabdecker -->



<div id="generalInfoPopup" class="fliess13px-grey">
    <div class="popup_headcontainer">
        <a id="general_popup_close" class="popup_close" href="#" ></a>
    </div>
    <div id="general_popup_question" class="question">
        <img src="./do_img/global/popups/general/success_icon.png?__cv=7ea7548d2cb4149555faab27c783e500" id="general_popup_success" class="success" />
        <img src="./do_img/global/popups/general/error_icon.png?__cv=abbabc79fb0ffe608c13a681aa9db900" id="general_popup_error" class="error" />
        <p id="general_popup_question_text">this text will be replace on xajax call</p>
    </div>
    <div class="popup_contentcontainer">
        <div class="popup_footcontainer">
            <div id="general_popup_close_button" class="popup_close_button">
                    <img src="./do_img/global/text_tf.esg?l=en&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey" />
            </div>
        </div>
    </div>
</div>


<div id="busy_layer"></div>


<!-- seitenabdecker -->

<style type="text/css" media="screen">    @import "http://<?php echo DynHost; ?>/css/cdn/includeInfoLayer.css?__cv=6f32d2604f47c348e721414f1418ee00";</style>
<script type="text/javascript">
infoText = '';
icon = '';
</script>
<script type="text/javascript" src="./js/infoLayer.js?__cv=f873586616939bcb06c5d95a7ef73200"></script>

<div id="infoLayer" class="confirmInfoLayer fliess13px-grey">
    <div class="popup_shop_headcontainer">
        <a class="popup_shop_close" href="javascript: void(0);" onclick="closeInfoLayer()"></a>
    </div>
    <div class="popup_shop_contentcontainer">
        <br>
        <div class="question"></div>
        <div class="popup_shop_footcontainer">
            <div id="infoLayerConfirm">
                <div class="popup_shop_confirm_button">
                    <div id="infoLayer_link_confirm"
                         class="popup_shop_confirm_text"
                         style="background-image: url(
                            './do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey'
                         );">
                    </div>
                </div>
                <div class="popup_shop_abort_button">
                    <div class="popup_shop_abort_text"
                         style="background-image: url(
                            './do_img/global/text_tf.esg?l=us&s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey'
                         );"
                         onclick="closeInfoLayer();">
                    </div>
                </div>
            </div>

            <div id="infoLayerInfo">
                <div class="popup_shop_close_button">
                    <div class="popup_shop_close_text"
                         style='background-image: url("./do_img/global/text_tf.esg?l=us&s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey");'
                         onclick="closeInfoLayer();"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>
<?php require GLOBALS . 'internalHelpLayer.php'; require GLOBALS . 'internalNews.php'; ?>
<div class="backgroundImageContainer">
    <div class="overallContainer">
        
        <div class="outerContainer fliess11px-gelb">
            
                <?php require GLOBALS . 'internalHeaderIntern.php'; ?>


            <div class="bodyContainer">
                                <div class="frameTop"></div>
                <div class="frameLeft_top"></div>
                <div class="frameRight_top"></div>
                <div class="contentFrame">
                    <div class="realContainer">
                                                
<link type="text/css" href="./css/jQuery/jquery.jscrollpane.css?__cv=9af65d2e9c92153b72e7289186102900" rel="stylesheet" media="all" />
<link type="text/css" href="./css/scrollbar_dark.css?__cv=7e1d0121e9bb277d63bfa0c8f5326900" rel="stylesheet" media="all" />
<form id="pppHiddenForm"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
    <input name="inviteLogCount"  id='inviteLogCount' type="hidden" value="0"/>
</form>

<link rel="stylesheet" media="all" href="./css/internalAchievement.css?__cv=dcf3eb367df137519ee71ec4c6132200" />

<style  type="text/css">
.tabLabel1Active {
background-image: url("text?t=PROFILE&w=6&h=10&s=9&color=black&b=lightestBlue");
    background-repeat:no-repeat;
    background-position: center;
}

.tabLabel1InActive {
background-image: url("text?t=PROFILE&w=6&h=10&s=9&color=white&b=grey");
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel2Active {
background-image: url("text?t=ACHIEVEMENTS&w=11&s=10&h=9&color=black&b=lightestBlue");
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel2InActive {
background-image: url("text?t=ACHIEVEMENTS&w=11&s=10&h=9&color=white&b=grey");
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel3Active {
background-image: url("text?t=SKILL TREE&w=7&s=9&h=10&color=black&b=lightestBlue");
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel3InActive {
background-image: url("text?t=SKILL TREE&w=7&s=9&h=10&color=white&b=grey");
    background-repeat:no-repeat;
    background-position: center;
}
/*.tabLabel4Active {
background-image: url(./do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_thea&color=black&bgcolor=grey1);
    background-repeat:no-repeat;
    background-position: center;
}
.tabLabel4InActive {
background-image: url(./do_img/global/text_tf.esg?l=us&s=10&t=pilotsheet_invites_and_bonus&f=eurostyle_thea&color=white&bgcolor=grey);
    background-repeat:no-repeat;
    background-position: center;
}*/
</style>

<div id="busyLayerPilotSheet"></div>
<div id="profilePage">
    <div  id="navBarProfile">
        <div id="tabButton1" class="tabButtonActive"
             onmouseover="buttonHandler.toggleButtons('tabButton1', 'tabButton', 'tabLabel1')"
             onmouseout="buttonHandler.toggleButtons('tabButton1', 'tabButton', 'tabLabel1', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton1', 4, 'tabButton', 'tabLabel1', 'tabLabel', 'tabLabelProfile'); pilotSheet.handleProfilePage('pageContent', 'profilePage');">
            <div id="tabLabel1" class="tabLabel tabLabel1Active"></div>
        </div>
            <div id="tabButton2" class="tabButtonInActive"
             onmouseover="buttonHandler.toggleButtons('tabButton2', 'tabButton', 'tabLabel2')"
             onmouseout="buttonHandler.toggleButtons('tabButton2', 'tabButton', 'tabLabel2', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton2', 4, 'tabButton', 'tabLabel2', 'tabLabel', 'tabLabelAchievements'); pilotSheet.handleAchievementPage('pageContent', 'achievementPage');">
            <div id="tabLabel2" class="tabLabel tabLabel2InActive"></div>
        </div>
            <div id="tabButton3" class="tabButtonInActive"
             onmouseover="buttonHandler.toggleButtons('tabButton3', 'tabButton', 'tabLabel3')"
             onmouseout="buttonHandler.toggleButtons('tabButton3', 'tabButton', 'tabLabel3', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton3', 4, 'tabButton', 'tabLabel3', 'tabLabel', 'tabLabelSkilltree'); pilotSheet.handleSkilltree('showSkilltree');" >
            <div id="tabLabel3" class="tabLabel tabLabel3InActive"></div>
        </div>
<!--        <div id="tabButton4" class="tabButtonInActive"
             onmouseover="buttonHandler.toggleButtons('tabButton4', 'tabButton', 'tabLabel4')"
             onmouseout="buttonHandler.toggleButtons('tabButton4', 'tabButton', 'tabLabel4', 'tabLabel')"
             onclick ="buttonHandler.clickedTabButton('tabButton4', 4, 'tabButton', 'tabLabel4', 'tabLabel', 'tabLabelInvite'); setImgUrl('imgUrl', ''); inviteIncentives.handleIncentives('showIncentivePage', 'inviteInfoPopup');" >
            <div id="tabLabel4" class="tabLabel tabLabel4InActive"></div>
        </div>-->
    </div>
    <div id="pageContent"><form id="profileStuff"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
    <input name="friendRequestCount" type="hidden" value="0"/>
</form>
<div id="pageControl">
<div id="ppLeft">
    <div id="ppLeftTop">
        <div id="ppLeftTopImage" class=" resizeProfileImage">
            <img class="profilePic" src="http://do-usr-strg.bpcdn.net/Darkorbit/ProfilePics/Avatar/Default/avatar.jpg"/>
        </div>
        <div id="ppLeftTopName" class="profileTitleFont">Name
            <br/><span class="profilePageFont"><?php echo $Users->DataRow['Name']; ?></span><br/>
        </div>
    </div>
    <div id="ppHorSep1" class="ppHorizontalSeparator"></div>
    <div id="ppLeftMiddle">
        <div id="ppLeftMiddleTitle" class="profileTitleFont">Player stats</div>
        <div class="scroll-pane" style="height: 75px; width: 180px;">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="profilePageFont profilePageFontTitle" style="width: 38%"  title="User since:">User since:</td>
                    <td class="profilePageFont" style="width: 62%">01-05-2013</td>
                </tr>
                <tr>
                    <td class="profilePageFont userInfo_right profilePageFontTitle"
                        style="width: 41%"  title="Rank:">Rank:</td>
                    <td class="profilePageFont" style="width: 59%;">
                        <div style="padding-left: 22px; width:100px; background-image: url(./do_img/global/ranks/rank_<?php echo $rank['rank']; ?>.png?__cv=d0d033082e6f5947dab73f9be6f13300); background-repeat: no-repeat;position:relative; left: -10px;height: 16px;margin-top: 4px;"
                             title="<?php echo $rank['name']; ?>">
                            <nobr><?php echo $rank['name']; ?></nobr>
                        </div>
                    </td>
                </tr>
                            <tr>
                    <td class="profilePageFont profilePageFontTitle" style="width: 38%"  title="Ranking:">Ranking:</td>
                    <td class="profilePageFont" style="width: 62%"><?php echo number_format($myRanking['overallRank']); ?></td>
                </tr>
                        </table>
        </div>
    </div>
    <div id="ppHorSep2" class="ppHorizontalSeparator"></div>
    <div id="ppLeftBottom">
        <div id="ppLeftTopBottomTitle" class="profileTitleFont">Clan stats</div>
        <table cellpadding="0" cellspacing="0" style="width: 100%">
                    <tr>
                <td class="profilePageFont"><?php if ($clanid == 0): echo "Not available";
else: echo $clan->getClanName($clanid);
endif; ?></td>
            </tr>
                    </table>
    </div>
</div>
<div id="ppVerSep1" class="ppVerticalSeparator"></div>

<div id="ppMiddle">
    <div id="ppMiddleTop">
        <div id="ppMiddleTitle" class="profileTitleFont">Player info</div>
        <div style="width: 290px; height: 110px;" class="scroll-pane">
            <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Country:</td>
                                            <td class="profilePageFont maxDistance">No info provided</td>
                                    </tr>
                                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance"
                        style="width: 25%">City:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                    </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle">Age:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Gender:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Interests:</td>
                                    <td class="profilePageFont maxDistance">No info provided</td>
                                    </tr>
                <tr>
                    <td class="profilePageFont profilePageFontTitle minDistance">Contact:</td>
                                                    </tr>
            </table>
        </div>
        <form id="statsMessForm"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
            <input id="statsMessDiv" name="statsMess" type="hidden" value="">
        </form>
        <div id="ppMiddleStatus">
            <div id="ppLeftMiddleStatusTitle" class="profileTitleFont">Status</div>
            <div class="statMessTextarea">
                <form id="statusMessageForm" name="statusMessageForm" action="imgUpload.php" method="POST" enctype="multipart/form-data" target="uploadTarget"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
                    <input id="changeStatusMessage" type="hidden" name="changeStatusMessage" value="no">
                    <textarea id="statusTextbox" name="statusMessage" cols="31" rows="3"
                              value="" onKeyDown="misc.limitTextSize(this, 175);"
                              onKeyUp="misc.limitTextSize(this, 175);"></textarea>
                </form>
            </div>
            <br/>
        </div>
        <div id="ppMiddleStatusEdit">
            <div id="editStatsSuccessMess"
                 class="editStats editStatsMessSuccess hideStatus">Changes accepted</div>
            <div id="editStatsFailedMess"
                 class="editStats editStatsMessFailed hideStatus">No changes made</div>
        </div>
        <div class="profileLinks profileLinksMiddle profileLinksHeight"
             onclick="pilotSheet.upLoadStatusMessage();">
        Save</div>
        <div id="ppHorSepBig" class="ppHorizontalSeparatorBig"></div>

        <div id="ppMiddleTopEdit">
            <div class="profileLinksMiddle profileEditButton profileEditButtonEffects"
                 onclick="pilotSheet.handleProfileEditForm('pageControl','pageContent', 'pageContent', 'show')">
                <div class="profileEditButtonLabel">EDIT PROFILE</div></div>
            <div id="editStatsSuccessProfile"
                 class="editStats hideStatus editStatsSuccessProfile">Changes accepted</div>
            <div id="editStatsFailedProfile"
                 class="editStats hideStatus editStatsFailedProfile">No changes made</div>
        </div>

       
    </div>
</div>
<div id="ppVerSep2" class="ppVerticalSeparator"></div>
<div id="ppRight">
    <div class="station<?php echo ($Users->DataRow['factionId'] === '1') ? 'Mars' : (($Users->DataRow['factionId'] === '2') ? 'Earth' : 'Venus'); ?>"></div>
    </div>

<script>
    jQuery(document).ready(function(){
        inviteIncentives.initialiseScrollBar();
        
                    
    });
</script>

</div>
</div></div>
<form id="inviteInfoForm"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
    <input id="inviteInfoInfo" name="inviteInfo" type="hidden" value="">
</form>
<div id="bgMask" class="bgMask hidePopUpMask"></div>
<div id="pppAjaxLoaderMask" class="pppAjaxLoaderMask"></div>
<div id="pppAjaxLoader" class="pppAjaxLoader"></div>
</div>

<div class="infoLayerContainer">
<div id="editFormProfileAll">

<div id="closeButtonEdit" class="closeButtonEdit closeButtonInActive"
     onmouseover="buttonHandler.toggleCloseButton('closeButtonEdit', 'closeButton')"
     onmouseout="buttonHandler.toggleCloseButton('closeButtonEdit', 'closeButton')"
     onclick="pilotSheet.handleProfilePage('closeButton', 'closeEditProfile')">
</div>

<div id="editFormProfile">
<form id="editForm" name="editForm" method="POST" enctype="multipart/form-data" target="uploadTarget">
  
<div class="container_edit_form">
    <span class="inputEditForm editFormLabelFont"> Pilot name: </span>
    <div class="inner_container_edit_form">
        <input class="formTextBox3 itemSelected1" type="text" name="userName" id="userName" size="30" maxlength="20" value="<?php echo $Users->DataRow['Name']; ?>" autocomplete="off">
        <div id="changeUsername">CHANGE</div>
    </div>
</div>
<script type="text/javascript">


    jQuery('#changeUsername').click(function() {

        jQuery('#popup-modalBackground').css({'z-index':1050}).show();
        jQuery.ajax({
            type: "POST",
            url: "indexInternal.es",
            data: { action: 'internalPilotSheet', subAction: 'changeUsername',userName: jQuery('#userName').val() },
            success: function(data){
                data = jQuery.parseJSON(data);
                if (data.status == 'OK') {
                    Tools.Popup.Presets.showSuccessDialog(data.message);
                } else {
                    Tools.Popup.Presets.showErrorDialog(data.message);
                }
                Tools.Popup.Initialize();
                Tools.Popup.show();
                jQuery('#popup').css({'z-index' : 1100, 'top': 100, 'left' : 260});

            },
            error: function(){
                console.log(data);
            }
        });
    });


</script>
<div class="container_edit_form">
    <span class="inputEditForm editFormLabelFont"> Email: </span>
    <div class="inner_container_edit_form">
        <input class=" formTextBox2 itemSelected1" type="text" name="username" id="contact" size="30" maxlength="65" value="<?php echo $Users->DataRow['Email']; ?>"/>
    </div>
</div>
<div class="container_edit_form">
    <div class="inputEditForm"><span class="editFormLabelFont"> Gender: </span></div>
    <div class="inner_container_edit_form">
        <select id="sex" name="sex" class="styled" style="width:228px; background:#000000; color:#A0A0A0; z-index: 1000;">
                            <option selected="----">----</option>
            <option>Male</option>
            <option>Female</option>
        
        </select>
    </div>
</div>
<div class="container_edit_form">
    <div class="inputEditForm"><span class="editFormLabelFont"> Country: </span></div>
    <div class="inner_container_edit_form">
        <select id="country" name="country" class="styled" style="width:228px; background:#000000; color:#A0A0A0; z-index: 1000;">
                                                        <option selected="NO_COUNTRY">----</option>
                                                                                    <option>Afghanistan</option>
                                                                                    <option>Albania</option>
                                                                                    <option>Algeria</option>
                                                                                    <option>American Samoa</option>
                                                                                    <option>American Virgin Islands</option>
                                                                                    <option>Andorra</option>
                                                                                    <option>Angola</option>
                                                                                    <option>Anguilla</option>
                                                                                    <option>Antarctic</option>
                                                                                    <option>Antigua &amp; Barbuda</option>
                                                                                    <option>Argentina</option>
                                                                                    <option>Armenia</option>
                                                                                    <option>Aruba</option>
                                                                                    <option>Australia</option>
                                                                                    <option>Austria</option>
                                                                                    <option>Azerbaijan</option>
                                                                                    <option>Bahamas</option>
                                                                                    <option>Bahrain</option>
                                                                                    <option>Bailiwick of Guernsey</option>
                                                                                    <option>Bailiwick of Jersey</option>
                                                                                    <option>Bangladesh</option>
                                                                                    <option>Barbados</option>
                                                                                    <option>Belarus</option>
                                                                                    <option>Belgium</option>
                                                                                    <option>Belize</option>
                                                                                    <option>Benin</option>
                                                                                    <option>Bermuda</option>
                                                                                    <option>Bhutan</option>
                                                                                    <option>Bolivia</option>
                                                                                    <option>Bosnia and Herzegovina</option>
                                                                                    <option>Botswana</option>
                                                                                    <option>Bouvet Island</option>
                                                                                    <option>Brazil</option>
                                                                                    <option>British Indian Ocean Territory</option>
                                                                                    <option>British Virgin Islands</option>
                                                                                    <option>Brunei</option>
                                                                                    <option>Bulgaria</option>
                                                                                    <option>Burkina Faso</option>
                                                                                    <option>Burundi</option>
                                                                                    <option>Cambodia</option>
                                                                                    <option>Cameroon</option>
                                                                                    <option>Canada</option>
                                                                                    <option>Cape Verde</option>
                                                                                    <option>Cayman Islands</option>
                                                                                    <option>Central African Republic</option>
                                                                                    <option>Chad</option>
                                                                                    <option>Chile</option>
                                                                                    <option>China</option>
                                                                                    <option>Christmas Islands</option>
                                                                                    <option>Cocos (Keeling) Islands</option>
                                                                                    <option>Colombia</option>
                                                                                    <option>Comoros</option>
                                                                                    <option>Congo</option>
                                                                                    <option>Cook Islands</option>
                                                                                    <option>Costa Rica</option>
                                                                                    <option>Croatia</option>
                                                                                    <option>Cyprus</option>
                                                                                    <option>Czech Republic</option>
                                                                                    <option>Democratic Republic of the Congo</option>
                                                                                    <option>Denmark</option>
                                                                                    <option>Djibouti</option>
                                                                                    <option>Dominica</option>
                                                                                    <option>Dominican Republic</option>
                                                                                    <option>Dutch Antilles</option>
                                                                                    <option>East Timor</option>
                                                                                    <option>Ecuador</option>
                                                                                    <option>Egypt</option>
                                                                                    <option>El Salvador</option>
                                                                                    <option>Equatorial Guinea</option>
                                                                                    <option>Eritrea</option>
                                                                                    <option>Estonia</option>
                                                                                    <option>Ethiopia</option>
                                                                                    <option>Faeroe Islands</option>
                                                                                    <option>Falkland Islands</option>
                                                                                    <option>Fiji</option>
                                                                                    <option>Finland</option>
                                                                                    <option>Former Yugoslav Republic of Macedonia</option>
                                                                                    <option>France</option>
                                                                                    <option>French Antarctic Territories</option>
                                                                                    <option>French Guiana</option>
                                                                                    <option>French Polynesia</option>
                                                                                    <option>Gabon</option>
                                                                                    <option>Gambia</option>
                                                                                    <option>Georgia</option>
                                                                                    <option>Germany</option>
                                                                                    <option>Ghana</option>
                                                                                    <option>Gibraltar</option>
                                                                                    <option>Greece</option>
                                                                                    <option>Greenland</option>
                                                                                    <option>Grenada</option>
                                                                                    <option>Guadeloupe</option>
                                                                                    <option>Guam</option>
                                                                                    <option>Guatemala</option>
                                                                                    <option>Guinea</option>
                                                                                    <option>Guinea-Bissau</option>
                                                                                    <option>Guyana</option>
                                                                                    <option>Haiti</option>
                                                                                    <option>Heard and McDonald Islands</option>
                                                                                    <option>Honduras</option>
                                                                                    <option>Hong Kong</option>
                                                                                    <option>Hungary</option>
                                                                                    <option>Iceland</option>
                                                                                    <option>India</option>
                                                                                    <option>Indonesia</option>
                                                                                    <option>Iraq</option>
                                                                                    <option>Ireland</option>
                                                                                    <option>Isle of Man</option>
                                                                                    <option>Israel</option>
                                                                                    <option>Italy</option>
                                                                                    <option>Ivory Coast</option>
                                                                                    <option>Jamaica</option>
                                                                                    <option>Japan</option>
                                                                                    <option>Jordan</option>
                                                                                    <option>Kazakhstan</option>
                                                                                    <option>Kenya</option>
                                                                                    <option>Kiribati</option>
                                                                                    <option>Korea</option>
                                                                                    <option>Kuwait</option>
                                                                                    <option>Kyrgyzstan</option>
                                                                                    <option>Lao People's Democratic Republic</option>
                                                                                    <option>Latvia</option>
                                                                                    <option>Lebanon</option>
                                                                                    <option>Lesotho</option>
                                                                                    <option>Liberia</option>
                                                                                    <option>Libya</option>
                                                                                    <option>Liechtenstein</option>
                                                                                    <option>Lithuania</option>
                                                                                    <option>Luxembourg</option>
                                                                                    <option>Macau</option>
                                                                                    <option>Madagascar</option>
                                                                                    <option>Malawi</option>
                                                                                    <option>Malaysia</option>
                                                                                    <option>Maldive Islands</option>
                                                                                    <option>Mali</option>
                                                                                    <option>Malta</option>
                                                                                    <option>Marshall Islands</option>
                                                                                    <option>Martinique</option>
                                                                                    <option>Mauritania</option>
                                                                                    <option>Mauritius</option>
                                                                                    <option>Mayotte</option>
                                                                                    <option>Mexico</option>
                                                                                    <option>Micronesia</option>
                                                                                    <option>Monaco</option>
                                                                                    <option>Mongolia</option>
                                                                                    <option>Montenegro</option>
                                                                                    <option>Montserrat</option>
                                                                                    <option>Morocco</option>
                                                                                    <option>Mozambique</option>
                                                                                    <option>Myanmar</option>
                                                                                    <option>Namibia</option>
                                                                                    <option>Nauru</option>
                                                                                    <option>Nepal</option>
                                                                                    <option>New Caledonia</option>
                                                                                    <option>New Zealand</option>
                                                                                    <option>Nicaragua</option>
                                                                                    <option>Niger</option>
                                                                                    <option>Nigeria</option>
                                                                                    <option>Niue</option>
                                                                                    <option>Norfolk Island</option>
                                                                                    <option>Northern Mariana Islands</option>
                                                                                    <option>Norway</option>
                                                                                    <option>Occupied Palestinian Territory</option>
                                                                                    <option>Oman</option>
                                                                                    <option>Pakistan</option>
                                                                                    <option>Palau</option>
                                                                                    <option>Panama</option>
                                                                                    <option>Papua New Guinea</option>
                                                                                    <option>Paraguay</option>
                                                                                    <option>Peru</option>
                                                                                    <option>Philippines</option>
                                                                                    <option>Pitcairn Islands</option>
                                                                                    <option>Poland</option>
                                                                                    <option>Portugal</option>
                                                                                    <option>Puerto Rico</option>
                                                                                    <option>Qatar</option>
                                                                                    <option>Republic of Moldova</option>
                                                                                    <option>Romania</option>
                                                                                    <option>Russian Federation</option>
                                                                                    <option>Rwanda</option>
                                                                                    <option>R�union</option>
                                                                                    <option>Saint Barth�lemy</option>
                                                                                    <option>Saint Kitts and Nevis</option>
                                                                                    <option>Saint Lucia</option>
                                                                                    <option>Saint Martin</option>
                                                                                    <option>Saint Vincent and the Grenadines</option>
                                                                                    <option>Samoa</option>
                                                                                    <option>San Marino</option>
                                                                                    <option>Saudi Arabia</option>
                                                                                    <option>Senegal</option>
                                                                                    <option>Serbia</option>
                                                                                    <option>Seychelles</option>
                                                                                    <option>Sierra Leone</option>
                                                                                    <option>Singapore</option>
                                                                                    <option>Slovakia</option>
                                                                                    <option>Slovenia</option>
                                                                                    <option>Solomon Islands</option>
                                                                                    <option>Somalia</option>
                                                                                    <option>South Africa</option>
                                                                                    <option>South Georgia and the South Sandwich Islands</option>
                                                                                    <option>Spain</option>
                                                                                    <option>Sri Lanka</option>
                                                                                    <option>St. Helena</option>
                                                                                    <option>St. Pierre and Miquelon</option>
                                                                                    <option>Suriname</option>
                                                                                    <option>Svalbard and Jan Mayen Island</option>
                                                                                    <option>Swaziland</option>
                                                                                    <option>Sweden</option>
                                                                                    <option>Switzerland</option>
                                                                                    <option>Sao Tom� und Pr�ncipe</option>
                                                                                    <option>Taiwan</option>
                                                                                    <option>Tajikistan</option>
                                                                                    <option>Thailand</option>
                                                                                    <option>The Netherlands</option>
                                                                                    <option>Togo</option>
                                                                                    <option>Tokelau</option>
                                                                                    <option>Tonga</option>
                                                                                    <option>Trinidad and Tobago</option>
                                                                                    <option>Tunisia</option>
                                                                                    <option>Turkey</option>
                                                                                    <option>Turkmenistan</option>
                                                                                    <option>Turks and Caicos Islands</option>
                                                                                    <option>Tuvalu</option>
                                                                                    <option>Uganda</option>
                                                                                    <option>Ukraine</option>
                                                                                    <option>United Arab Emirates</option>
                                                                                    <option>United Kingdom</option>
                                                                                    <option>United Republic of Tanzania</option>
                                                                                    <option>United States of America</option>
                                                                                    <option>United States of America - Offshore islands</option>
                                                                                    <option>Uruguay</option>
                                                                                    <option>Uzbekistan</option>
                                                                                    <option>Vanuatu</option>
                                                                                    <option>Vatican City</option>
                                                                                    <option>Venezuela</option>
                                                                                    <option>Vietnam</option>
                                                                                    <option>Wallis and Futuna Islands</option>
                                                                                    <option>Western Sahara</option>
                                                                                    <option>Yemen</option>
                                                                                    <option>Zambia</option>
                                                                                    <option>Zimbabwe</option>
                                                                                    <option>�land Islands</option>
                                                                                    <option>Scotland</option>
                                            </select>
    </div>
    
</div>
<div class="container_edit_form">
    <span class="inputEditForm editFormLabelFont"> Confirm Password: </span>
    <div class="inner_container_edit_form">
        <input class=" formTextBox2 itemSelected1" style="width: 219px !important;" type="password" name="cpw" id="contact" size="30" maxlength="65" />
    </div>
</div>
<div class="container_edit_form">

    <br class="clearMe"/>
</div>

<div class="separatorLine separatorLine2"></div>


</form>
<iframe id="uploadTarget" name="uploadTarget" src="" style="width:0;height:0;border:0px solid #fff;"></iframe>
</div>
<div id="editFormProfileFooter">

    <div id="saveButton" class="saveButtonInActive"
         onmouseover="buttonHandler.toggleButtons('saveButton', 'saveButton', 'saveButtonLabelo', 'saveButtonLabel')"
         onmouseout="buttonHandler.toggleButtons('saveButton', 'saveButton', 'saveButtonLabel', 'saveButtonLabel')"
         onclick="pilotSheet.handleProfilePage('editForm', 'editUserProfile')">
        <div id="saveButtonLabel" class="saveButtonLabelInActive"><strong>SAVE</strong></div>
    </div>
</div>
</div>
<div id="pppAvatarDescr" class="skill_tooltip obstrusive" style="display: none; z-index: 9200;">
    <div class="tooltip_header"></div>
    <div class="tooltip_content skilltree_font">
        <strong class="skilltree_font_info">Tips for uploading images</strong>

        <div class="tooltip_seperator"></div>
        <ul style="padding:10px 0 0 5px;">
            <li>- JPG or GIF only</li>
            <li>- No larger than 15KB</li>
            <li style="color: #FCCE00;">- Optimum resolution: 115 x 125 pixel</li>
            <li>- No forbidden symbols</li>
            <li>- No offensive images</li>
            <li>- Animated GIFs are allowed</li>
        </ul>
    </div>
    <div class="tooltip_footer skilltree_font"></div>
</div>
</div><div class="infoLayerContainer">
    <div id="userProfileInfoPopup" class="inviteInfoPopup hideinviteInfoPopup">
        <div class="inviteInfoPopupHeader">
            <div class="infoLayerHeaderIcon"></div>
            <div class="infoLayerHeaderText userProfileInfoLayerHeaderText">YOUR PILOT PROFILE</div>
            <div id="closeUserProfileInfoPopup" class="closeInfoLayer closeUserProfileInfoPopup closeButtonInActive"
                 onmouseover="buttonHandler.toggleCloseButton('closeUserProfileInfoPopup', 'closeButton');"
                 onmouseout="buttonHandler.toggleCloseButton('closeUserProfileInfoPopup', 'closeButton');"
                 onclick="inviteIncentives.handleIncentives('closeInfoLayer', 'userProfileInfoPopup');">
            </div>
        </div>
        <div class="infoLayerBodyWhole">
            <div class="userProfileInfoLayerBodyHeader">
                <div class="infoLayerBodyHeader">Your pilot profile</div>
                <div class="userProfileInfoLayer userProfileInfoLayerText1">The profile page allows you to show off your ship and your profile to other friends and players. Your profile is accessible for everyone and is easy to identify with the help of your User ID.</div>
                <div class="userProfileInfoLayer userProfileInfoLayerText2">There are different ways to get to your profile page:</div>
                <ul class="userProfileInfoLayerList">
                    <li class="userProfileViewPossibilityList">Click on the link below: <a href="http://us4.darkorbit.bigpoint.com/p/6dJ5t-AFO2I/?lang=us" class="userProfileLink" target="blank">Your profile</a></li>
                    <li class="userProfileViewPossibilityList">Copy link shown below via <span class="crtlColor">([CTRL] + [C])</span>. Then paste it into your browser's address line with <span class="crtlColor">([CTRL] + [V])</span>. </li>
                    <li class="userProfileViewPossibilityList">Browse through profiles with the profile search: Just click your <span class="crtlColor">username</span> or another player's username and then click <span class="crtlColor">Search</span>.</li>
                </ul>

                <div class="infoLayerLinkToProfile">Your profile: <a href="http://us4.darkorbit.bigpoint.com/p/6dJ5t-AFO2I/?lang=us" class="userProfileLink" target="blank">http://us4.darkorbit.bigpoint.com/p/6dJ5t-AFO2I/?lang=us</a></div>
                <div class="searchProfile">
                    <div class="searchProfileHeader">Search other players' profiles:</div>
                    <div class="searchProfileBody">
                        <form id="searchProfileForm" name="searchProfileForm" action="imgUpload.php" method="POST" enctype="multipart/form-data" target="uploadTarget"><input type="hidden" name="reloadToken" value="a7ad029b3d669113489f3bdfa3d6f63e">
                            <input id="searchSuccessful" name="searchSuccessful" type="hidden" value="User found"/>
                            <input id="searchFailed" name="searchFailed" type="hidden" value="User not found"/>
                            <table>
                                <tr>
                                    <td><input id="searchProfileField" name="searchProfileField" class="searchProfileField"
                                               type="text" value="Enter username" maxlength="50"
                                               size="30"/></td>
                                    <td><div id="searchProfileSubmit" class="searchProfileSubmit" onclick="pilotSheet.performProfileSearch();"></div>
                                    </td>
                                    <td><div id="searchProfileFieldStatus" class="searchProfileFieldStatus searchProfileAjaxLoader hideElement"></div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoLayerFooter">
            <div id="closeUserProfileInfoLayer" class="closePopup"
                 onclick="inviteIncentives.handleIncentives('closeInfoLayer', 'userProfileInfoPopup');">
            Close
            </div>
        </div>
    </div>
</div><div class="infoLayerContainer">
    <div id="bonusLogBook" class="hideBonusLogBook">
        <div class="bonusInfoDivText bonusLogBookHead">Bonus logbook</div><br /><br />
        <div class="logBookTableHead">
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <tr class="logBookHeadIncentives">
                    <th style="width: 20%; text-align: left; padding-left:5px;">Name</th>
                    <th style="width: 25%; text-align: left; padding-left:5px;">Date</th>
                    <th style="width: 55%; text-align: left; padding-left:5px;">Bonus</th>
                </tr>
            </table>
        </div>
        <div class="logBookTableBody">
            <div id="logBookBox" style="height: 280px; width:200%;" class="scroll-pane">
                <table cellpadding="0" style="width: 100%">
                                </table>
            </div>
        </div>
    </div>
    <div id="closeButtonBonusLog" class="closeButtonBonusLog closeButtonInActive removeForm hideBonusLogBook"
         onmouseover = "buttonHandler.toggleCloseButton('closeButtonBonusLog', 'closeButton');"
         onmouseout = "buttonHandler.toggleCloseButton('closeButtonBonusLog', 'closeButton');"
         onclick = "inviteIncentives.handleLogBook('closeButtonBonusLog', 'closeLogBook');"
            >
    </div>
</div><script type="text/javascript">
    misc.testForScrollbar("listBody")
</script>
</div><!-- END contentFrame -->
</div><!-- END realContainer -->

<div class="footerContainer">
    <div class="frameLeft_bottom"></div>
    <div class="frameRight_bottom"></div>
    <div class="frameBottom"></div>

<div id="alertBox" class="fliesstext"></div>
<div id="imprint" style="width:523px;height:600px;" class="fliesstext">
    <div id="imprint_close"><a href="javascript:void(0);" onclick="closeInfo('imprint');"><img src="./do_img/global/intro/but_close.png?__cv=4addfeeb6d889c0632072f85386d1900" alt="" /></a></div>
    <div id="imprint_text"><b>Bigpoint S.�.r.l. and Co, SCS</b><br>Building Vertigo - Polaris<br>2-4 rue Eug�ne Ruppert<br>L-2453 Luxemburg<br><br><b>Our business portal</b><br><a class="" href="http://www.bigpoint.net" target="_blank">http://www.bigpoint.net</a><br><br><b>Corporate information</b><br>CEO: Bigpoint S.�.r.l.<br>Jeronimo Folgueira<br>Court of registry: R.C.S. Luxemburg<br>Trade register number: B 167809<br>VAT number: LU 25331016<br><br><b>Disclaimer</b><br>Although every effort is made to present current and accurate information, we cannot assume responsibility for information from external links. The author of each web page is solely responsible for the content of that page.<br><br><b>Contact</b><br>Telephone <b>(no Support)</b>: +352 261 911 3515<br>Fax: +352 49 48 48 6606<br><br><b>Questions or problems? Contact Support</b><br>E-mail: <a class="gl_imprint_support_link" href="/index.es?action=support">Support form</a><br>Internet: http://www.bigpoint.com<br><br><b>Commissioner for Youth Protection</b><br>Lawyer Dr. Andreas Lober<br>SCHULTE RIESENKAMPFF Rechtsanwaltsgesellschaft mbH<br />An der Hauptwache 7<br />60313 Frankfurt am Main<br>E-mail: jugendschutzbeauftragter@bigpoint.com<br><br><b>Data protection officer</b><br>E-mail: privacy@bigpoint.net<br><a style="text-decoration: underline" class="" href="/index.es?action=info&subAction=privacyPolicy" target="_blank">Data Privacy Policy</a></div>
</div>
<?php require GLOBALS . 'credits.php';?>

<script type="text/javascript" id="sourcecode">

    jQuery(function()
    {
        jQuery('#teamCredits_text').jScrollPane({autoReinitialise: true, showArrows: true});
    });

</script>

    <div id="imprint_ingame" class="fliesstext"
         style="position:absolute; left:40px; top:24px; height:15px;">
                    <a href="javascript:void(0);" onclick="showFooterLayer('imprint');">
               
                <a href="javascript:void(0);" onclick="showFooterLayer('teamCreditsBox')">Credits</a> |
        <a href="/GameAPI.php?action=portal.redirectToBoard" target="_blank">Forum</a>
    </div>


    


    </div><!-- End footerContainer -->
</div><!-- End bodyContainer -->
</div><!-- End outerContainer -->
</div><!-- End overallContainer -->
</div>




<script type="text/javascript">
    
    if (jQuery('#toolbar').length > 0) {
        jQuery('#toolbar').css('float', 'none');
        jQuery('body').css('background-position', 'center 30px');
    }
    
</script>
<link rel="stylesheet" type="text/css" href="./resources/css/popup.css?__cv=4e58da2dec4df33ee5f4c239848dda00" />
<div id="popup">
    <div class="header">
        <div class="button-close"></div>
    </div>
    <div class="body">
        <div class="icon icon-question"></div>
        <div class="icon icon-error"></div>
        <div class="icon icon-success"></div>
        <div class="content fliess13px-grey"></div>
    </div>
    <div class="footer single-button">
        <div class="button button-green">
            <div class="text" style="background-image: url(./do_img/global/text_tf.esg?s=12&t=ok&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
        <div class="button button-blue">
            <div class="text" style="background-image: url(./do_img/global/text_tf.esg?s=12&t=confirmBox_cancel&f=eurostyle_thea&color=white&bgcolor=grey);"></div>
        </div>
    </div>
</div>
<div id="popup-modalBackground"></div>
<img id="popup-loading" alt="Loading..." src="./do_img/global/pilotSheet/profilePage/loadingAnimation.gif" />

<!-- LayertoolService JavaScript Injection start -->
<script type="text/javascript">
    //<![CDATA[
    // add fancybox css to the head
    var cssLink  = document.createElement('link');
    cssLink.type = 'text/css';
    cssLink.rel  = 'stylesheet';
    cssLink.href = './application/fancybox/jquery.fancybox-1.3.4.css';
    document.getElementsByTagName('head')[0].appendChild(cssLink);
    //]]>
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="./application/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="./application/client/client.js"></script>
<script type="text/javascript" src="./application/cookie/jquery.cookie.js"></script>
<script type="text/javascript">var jQueryLts = jQuery.noConflict(true);</script>


</body>
</html>