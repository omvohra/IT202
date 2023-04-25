<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Om Vohra (ov33)</td></tr>
<tr><td> <em>Generated: </em> 4/24/2023 11:54:53 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/it202-milestone1-deliverable/grade/ov33" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/233851113-889a049b-39a0-4bf4-b813-6ea899cd1a1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1: Showing the email is invalid while registering as it does not contain<br>the &quot;@&quot; symbol. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/233851219-84b4464c-4d8b-4275-986d-1cbcf66f9373.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#1: Showing the email is invalid while registering as it does not contain<br>a part after the &quot;@&quot; symbol.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/233851279-66c89bc7-efed-48f9-927a-e3a33ee9ddbd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#2: Showing the password is invalid as it only contains 6 characters and<br>the requirement is 8 or more.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/233852280-f7cadfde-0005-45c5-b235-d6480bd69a7c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#3: Shows that the passwords must match.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/233852695-2226ebab-eb44-4460-af67-575558f1f02d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>#6: Shows the form with valid data filled in before the form is<br>submitted.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234168648-45e8e3d1-6745-479a-bc63-f325d9c3ab64.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>i recieved this error when trying to show email and user name not<br>available validation.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/233852734-22437fdf-3f37-4c9d-9043-11ee3c94e934.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that the valid user data from task 1 is present in this<br>screenshot of the Users table.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/omvohra/IT202/pull/16">https://github.com/omvohra/IT202/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>#1: The form is handled through the navigation file. It behaves based on<br>whatever is inputted.</div><div><br></div><div>#2: The validation logic is through the nav.php. Through this we<br>can return validate(this) and validate accordingly.</div><div><br></div><div>#3: The password is inputted and hashed. When<br>logging in the password is unhashed to check if it matches up with<br>the input and if it does allows the user to successfully login.</div><div><br></div><div>#4: The<br>DB is utilized to store id's, email's, and hashed password, times when users<br>were created or modified. The DB stores all of this information to be<br>referenced whenever needed.</div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234168960-5c77a4e5-6e55-4672-8809-d8f09c0186c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>got the following error trying to log in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234168960-5c77a4e5-6e55-4672-8809-d8f09c0186c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>got the following error while trying to log in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/omvohra/IT202/pull/24">https://github.com/omvohra/IT202/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <div>#1: The form matches user input to those in the User table and<br>allows entry if details match.</div><div><br></div><div>#2: The validation logic is through the nav.php. Through<br>this we can return validate(this) and validate accordingly.</div><div><br></div><div>#3: When logging in the password<br>is unhashed to check if it matches up with the input and if<br>it does allows the user to successfully login.</div><div><br></div><div>#4: The DB is utilized to<br>match login info.</div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234168960-5c77a4e5-6e55-4672-8809-d8f09c0186c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cannot log in to get the log out message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234168960-5c77a4e5-6e55-4672-8809-d8f09c0186c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error prohibits me from displaying<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/omvohra/IT202/pull/24">https://github.com/omvohra/IT202/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Explanation: The process shows that the user can&#39;t access a log-in protected page.<br>The session logic is to find if the user is_loggedin and if they&#39;re<br>not they will be notified that they cannot gain access until they log<br>in.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234168960-5c77a4e5-6e55-4672-8809-d8f09c0186c3.png"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234170310-2f82a720-9481-4886-9f29-b71e43a93f17.png"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234170378-66f0fcb7-36b9-4f5c-bafe-f64c35d14cee.png"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/omvohra/IT202/pull/24">https://github.com/omvohra/IT202/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Explanation: The process for login-protected pages would be that if you&#39;re not logged<br>in that you would not be able to access them. This is done<br>by checking whether a user is logged in or not.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Explanation: The process for login-protected pages would be that if you don&#39;t have<br>the role of admin you won&#39;t be able to access them. This is<br>done by checking for admin through the Roles and UserRoles DB&#39;s.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/124006309/234170472-3e5724dd-b14f-423c-a80d-1ff8bc2c76f5.png"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/omvohra/IT202/pull/24">https://github.com/omvohra/IT202/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>Explanation: I chose a straight forward minimalistic styling. I used no border and<br>instead underlined through using the bottom for a more simple view for inputting.<br>I also chose colors that would be easier to the eye.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Explanation: The messages are user friendly as they direct the user to a<br>way to solve the issue. We&#39;ve been handling technical messages and converting them<br>to be friendly to our users by putting ourselves in their shoes and<br>finding a clear and direct answer to the issue.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Explanation: The edit logic takes the DB values and UPDATES them. It validates<br>by checking if login names or emails are available and through password confirmation.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/omvohra/projects/1">https://github.com/users/omvohra/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://ov33-prod.herokuapp.com/">https://ov33-prod.herokuapp.com/</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-102-S23/it202-milestone1-deliverable/grade/ov33" target="_blank">Grading</a></td></tr></table>