<!DOCTYPE html>
<html lang="en-us">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Survey</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="survey-script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Assistant:300,400,600,700" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="survey-style.css">
</head>

<body>
    
    <div class="main-container text-center">
        
        <!--top navigation section-->
        <div class="section-container">
            <div class="row">
                <ul class="horizontal-list" id="top-navigation">
                    <li>
                        <div id="backward-btn" class="nav-btn arrow-btn chevron-arrow-left up-space-5"></div>
                    </li>
                    <li>
                        <div class="nav-btn section-btn active" id="section-1-btn"></div>
                        <h5 class="nav-label">intro</h5>
                    </li>
                    <li>
                        <div class="nav-btn section-btn" id="section-2-btn"></div>
                        <h5 class="nav-label hidden-true">consent</h5>
                    </li>
                    <li>
                        <div class="nav-btn section-btn" id="section-3-btn"></div>
                        <h5 class="nav-label hidden-true">infographic</h5>
                    </li>
                    <li>
                        <div class="nav-btn section-btn" id="section-4-btn"></div>
                        <h5 class="nav-label hidden-true">survey pt.1</h5>
                    </li>
                    <li>
                        <div class="nav-btn section-btn" id="section-5-btn"></div>
                        <h5 class="nav-label hidden-true">survey pt.2</h5>
                    </li>
                    <li>
                        <div class="nav-btn section-btn" id="section-6-btn"></div>
                        <h5 class="nav-label hidden-true">done!</h5>
                    </li>
                    <li>
                        <div id="forward-btn" class="nav-btn arrow-btn chevron-arrow-right up-space-5 active"></div>
                    </li>
                </ul>
            </div>
        </div>
        
        
        
        
        <div class="section-container" id="section-intro">
            <div class="section-container up-space-25">
                <div class="row">
                    <h1 class="horizontal-margin-auto">Infographic Usability Survey</h1>
                </div>
                <div class="row hma-p up-space-15 text-justify">
                    <p>Thank you for taking ECHO's infographic usability survey.</p>
                    <p>The purpose of this survey is to gather information on how people perceive and use infographics developed by ECHO. The information will be used to improve how people can access health-related information.</p>
                    <p>To participate in the survey, you must agree to the consent form on the next page. Then, you can view the infographic through a link. After viewing the infograhpic, you can complete the survey. We think the survey will take at most 20 minutes to complete.</p>
                    <p>If you have any questions or comments, please email byunghoo@ualberta.ca or bulut@ualberta.ca</p>
                </div>
            </div>
            
            <div class="section-container up-space-25">
                <div class="row">
                    <div class="btn" id="to-consent-btn"><h2 class="btn-label">Consent Form</h2></div>
                </div>
            </div>
            
            <div class="section-container up-space-35">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">a project by</h5>
                </div>
                <div class="row">
                    <img src="/survey/echo_logo.svg" class="logo horizontal-margin-auto" id="echo-logo">
                </div>
            </div>
            
            <div class="empty-50"></div>
        </div>
        
        
        
        <div class="section-container hidden-true" id="section-consent">
            <div class="section-container up-space-25">
                <div class="row">
                    <h1 class="horizontal-margin-auto">Consent Form</h1>
                </div>
                <div class="row hma-p up-space-15 text-justify display-block">
                    
                    <p class="emphasized">Study Title</p>
                    <p>Infographic usability study.</p>
                    
                    <p class="emphasized up-space-50">Research Investigator</p>
                    <p>Byunghoon Ahn</p>
                    <p>5-190 Edmonton Clinic Health Academy</p>
                    <p>University of Alberta</p>
                    <p>Edmonton, AB, T6G 1C9</p>
                    <p>byunghoo@ualberta.ca</p>
                    
                    <p class="emphasized up-space-50">Project Supervisor</p>
                    <p>Dr.Okan Bulut</p>
                    <p>6-110 Edmonton Centre North</p>
                    <p>University of Alberta</p>
                    <p>Edmonton, AB, T6G 2G5</p>
                    <p>bulut@ulaberta.ca</p>

                    <p class="emphasized up-space-50">Background</p>
                    <p>This project is part of EDPY 597: Survey Design and Implementation taught by Dr. Okan Bulut during the Winter 2018 term. We are asking your voluntary participation in this pilot study where the Infographic Usability Survey is being developed as a course assignment for EDPY 597: Survey Design and Implementation. The results of this study will only be used by the research investigator to refine the survey instrument being used in the study. The findings will not be disseminated for any purposes (e.g., research, publication, presentation, etc.)</p>
                    
                    <p class="emphasized up-space-50">Purpose</p>
                    <p>The purpose of this survey is to gather information on how people perceive and use infographics developed by ECHO. The information will be used to better improve how people can access health information.</p>
                    
                    <p class="emphasized up-space-50">Study Procedures</p>
                    <p>You will be given an online survey form where you can first read and choose to give consent. If you choose to give consent, you will be given a link to view a digital infographic. After viewing the infographic, you will be presented with survey questions. The survey will consist of a set of questions about ease of use, likability, and perceived effectiveness in presenting information. It is expected that completing the survey will take roughly 20 minutes, including viewing the infographic.</p>
                    <p>The data will be gathered through a web form. The gathered data will be recorded digitally and be stored on a password-protected virtual drive, and stored for a minimum of five years as recommend by University of Alberta Guidelines by Byunghoon Ahn. If we use a quotation that you provided, any information that would identity you will be anonymized.</p>
                    
                    <p class="emphasized up-space-50">Potential Benefits and Risks</p>
                    <p>The user study will benefit the project by providing useful user data to make design decisions from. There are no other foreseeable direct benefits to participants other than perhaps learning about health related information (e.g., what to do if your child has a fever or ear infection). There are no foreseeable risks to this study.</p>
                    
                    <p class="emphasized up-space-50">Voluntary Participation</p>
                    <p>You are under no obligation to participate in this pilot study. Therefore, the participation is completely voluntary. You can opt out without any penalty. Also, you can ask to have any collected data withdrawn from the database until May 31, 2018. In the event of opting out, the research investigator will remove any data obtained from you.</p>
                    
                    <p class="emphasized up-space-50">Confidentiality &amp; Anonymity</p>
                    <p>We intend to use the data collected during this pilot study for the refinement of the survey instrument. Your participation will not be identified while completing the survey instrument. Any further study with the data from this study will have to be approved by a Research Ethics Board.</p>
                    
                    <p class="emphasized up-space-50">Further Information</p>
                    <p>If you have any further questions, please do not hestitate to contact Byunghoon Ahn (byunghoo@ualberta.ca), or the course instructor Dr. Okan Bulut (bulut@ualberta.ca). The plan for this study has been reviewed for its adherene to ethical guidelines by a Research Ethics Boards at the University of Alberta. For questions regarding participant rights and ethical conduct of research, contact the Research Ethics Office at (780) 492-2615.</p>
                    
                    <p class="emphasized up-space-50">Consent Statement</p>
                    <p>By clicking on continue I confirm that I have read this form and that the research study has been explained to me. I further confirm that I have been given the opportunity to ask questions and my questions have been answered. If I have additional questions, I have been told whom to contact. I agree to participate in the research study described above and will receive a copy of this consent form after I sign it.</p>

                </div>
            </div>
            
            <div class="section-container up-space-25">
                <div class="row">
                    <div class="btn" id="to-infographic-btn"><h2 class="btn-label">Continue</h2></div>
                </div>
            </div>
            
            <!--<div class="section-container up-space-25">-->
            <!--    <div class="row">-->
            <!--        <div class="btn" id="to-consent-btn"><h2 class="btn-label">Consent Form</h2></div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="empty-50"></div>
            
        </div>
        
        
        
        
        
        
        <div class="section-container hidden-true" id="infographic-section">
            <div class="section-container up-space-25">
                <div class="row">
                    <h1 class="horizontal-margin-auto">Link to Infographic</h1>
                </div>
                <div class="row hma-p up-space-15 text-justify">
                    <p>Click the link button to view the infographic. This will open a new tab on your browser.</p>
                </div>
            </div>
            
            <div class="section-container up-space--25">
                <div class="row">
                    <div class="btn" id="to-consent-btn"><a href="https://project-poisonsting-re-nixity.c9users.io/index.html" target="_blank"><h2 class="btn-label">Infographic Link</a></h2></div>
                </div>
            </div>
            
            
            <div class="section-container up-space-75">
                <div class="row hma-p up-space-15 text-justify">
                    <p>After viewing the infographic, click on continue to proceed to the survey.</p>
                </div>
            </div>
            
            
            <div class="section-container up-space--25">
                <div class="row">
                    <div class="btn" id="to-survey1-btn"><h2 class="btn-label">Continue</h2></div>
                </div>
            </div>
            
            <div class="empty-50"></div>
        </div>
        
        
        
        
        
        <div class="section-container hidden-true" id="section-survey1">
            <div class="section-container up-space-25">
                <div class="row">
                    <h1 class="horizontal-margin-auto">Survey</h1>
                </div>
                <div class="row hma-p up-space-15 text-justify">
                    <p>Thinking back to the infographic you just saw, please click on the choice that best reflects how you feel.</p>
                </div>
            </div>
            
            <div class="section-container up-space-25">
                <div class="row">
                    <h2 class="horizontal-margin-auto">Section 1: Usability</h2>
                </div>
            </div>
            
            <div class="section-container question-container up-space-35">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 1/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Does this infographic help you make decisions for you and your child?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 2/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Does this infographic have information that is insightful?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 3/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Does this infographic have new information you have never seen?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 4/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Do you need instructions to use this infographic?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 5/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Would you recommend this infographic to others?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 6/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Do you like the illustration style in the infographic?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Like it alot</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Like it slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Dislike it slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Dislike it alot</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 7/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Do you like the amount of text in the infographic?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Like it alot</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Like it slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Dislike it slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Dislike it alot</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 8/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Do you like the amount of illustration in the infographic?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 9/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Do you like the choices of colors used in the infographic?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt1. | 10/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Were the texts easy to read? (in terms of legibility)</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 11/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Was the infographic easy to understand?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 12/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Was there too much information in the infographic?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.1 | 13/13</h5>
                </div>
                <div class="row hma-p">
                    <p>Was the infographic simple to use?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Totally</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Moderately</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Only slightly</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Not at all</h2></div></li>
                </ul>
            </div>
            
            <div class="empty-50"></div>
            
            <div class="section-container up-space--25">
                <div class="row">
                    <div class="btn" id="to-survey2-btn"><h2 class="btn-label">Continue</h2></div>
                </div>
            </div>
            
            <div class="empty-50"></div>
            
        </div>
        
        
        
        
        <div class="section-container hidden-true" id="section-survey2">
            <div class="section-container up-space-25">
                <div class="row">
                    <h1 class="horizontal-margin-auto">Survey</h1>
                </div>
                <div class="row hma-p up-space-15 text-justify">
                    <p>Please click on the choice, or type in answers that best represents you.</p>
                </div>
            </div>
            
            <div class="section-container up-space-25">
                <div class="row">
                    <h2 class="horizontal-margin-auto">Section 2: Demographics</h2>
                </div>
            </div>
            
            <div class="section-container question-container up-space-35">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 1/7</h5>
                </div>
                <div class="row hma-p">
                    <p>What is your gender?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Male</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Female</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Other</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Prefer not to answer</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 2/7</h5>
                </div>
                <div class="row hma-p">
                    <p>What is your age?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Less than 20</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">21-30</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">31-40</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">41-50</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">51 and above</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 3/7</h5>
                </div>
                <div class="row hma-p">
                    <p>What is your maritial status?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Single</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Married</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 4/7</h5>
                </div>
                <div class="row hma-p">
                    <p>What is your gross household annual income?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Less than $25,000</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">$25,000 ~ $49,999</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">$50,000 ~ $74,999</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">$75,000 ~ $99,999</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">$100,000 ~ $149,999</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">$150,000 and over</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Prefer not to answer</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 5/7</h5>
                </div>
                <div class="row hma-p">
                    <p>What is your highest level of education?</p>
                </div>
                <ul class="choice-list">
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Some high school</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">High school diploma</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Some post secondary</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Post secondary certifiate/diploma</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Post secondary degree</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Graduate degree</h2></div></li>
                    <li><div class="btn question-choice" id="to-survey1-btn"><h2 class="btn-label">Other</h2></div></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 6/7</h5>
                </div>
                <div class="row hma-p">
                    <p>How many children do you have?</p>
                </div>
                <ul class="choice-list">
                    <li><input type="text" name="children-number" class="textbox written-answer" placeholder="click here to type" id="answer-children-number"></li>
                </ul>
            </div>
            
            
            
            <div class="section-container question-container up-space-75">
                <div class="row">
                    <h5 class="small-label horizontal-margin-auto">pt.2 | 7/7</h5>
                </div>
                <div class="row hma-p">
                    <p>How old are your children?</p>
                </div>
                <ul class="choice-list">
                    <li><input type="text" name="children-age" class="textbox written-answer" placeholder="click here to type" id="answer-children-age"></li>
                </ul>
            </div>
            
            
            
            <div class="empty-50"></div>
            
            
            
            <div class="section-container up-space--25">
                <div class="row">
                    <div class="btn" id="to-complete-btn"><h2 class="btn-label">Submit</h2></div>
                </div>
            </div>
            
            <div class="empty-50"></div>
            
        </div>
        
        
        
        <div class="section-container hidden-true" id="section-complete">
            <div class="section-container up-space-25">
                <div class="row">
                    <h1 class="horizontal-margin-auto">Survey Complete!</h1>
                </div>
                <div class="row hma-p up-space-15 text-justify">
                    <p>Thank you for taking ECHO's infographic usability survey.</p>
                    <p>Your response has been recorded and is safely stored. If you have any questions please email byunghoo@ualberta.ca or bulut@ualberta.ca</p>
                </div>
            </div>
            
            <div class="empty-150"></div>
        </div>
        
        
        
    </div>













    
</body>