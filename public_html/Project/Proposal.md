# Project Name: Simple Bank
## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.
## Github Link: https://github.com/EllisBallard1/IT202-001/tree/prod
## Project Board Link: https://github.com/EllisBallard1/IT202-001/projects/1
## Website Link: https://eab4-prod.herokuapp.com/Project/login.php
## Your Name: Ellis Ballard

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
    - [ ] \(11/1/2021 of completion) Feature Title (User will be able to register a new account)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-dev.herokuapp.com/Project/register.php
        - Pull Requests
        - PR link #1 (repeat as necessary)
        - https://github.com/EllisBallard1/IT202-001/pull/10
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140788172-c13945a2-2969-4765-b798-7e589df8d014.png)
            - Screenshot #1 description: This picture shows that a new user was successfully able to register an account in the database.
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140788242-b53aa76d-4ae1-4ef6-a6a3-90904165499e.png)
            - Screenshot #2 description: This picture shows the confirmation that the user is now successfully registered and stored in the database.

    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to login to their account (given they enter the correct credentials))
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/home.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/10
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140788966-36c241a3-b9cb-4aae-8a7f-99f0f050eb61.png)
            - This screenshot shows the validation message and information for when the user is able to successfully login.

    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to logout)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/11
        - PR Link #2 https://github.com/EllisBallard1/IT202-001/pull/32
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140790080-8139e38d-7fe0-4d8a-9436-2b176f311716.png)
            - Screenshot #1 description: This screenshot shows the success message presented to the user when they logout of their account

    - [ ] \(11/8/2021 of completion) Feature Title (Basic security rules implemented)
    -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/admin/list_roles.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/24
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140791007-6e95288c-7a51-4f37-b6b8-e2b6e93bb0d9.png)
            - This screenshot shows the Admin role being implemented in the database. From here only the admin user(s) are able to create roles or view sensitive information.
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140791212-59a8c614-1a09-44d1-ad23-a01ceb992954.png)
            - This screenshot shows the admin role being kept within the database table.
        - Screenshot #3 
          - ![image](https://user-images.githubusercontent.com/89932304/140791504-fcdfe6cf-e50b-41ad-a297-60a2c75f85d2.png)
            - This screenshot shows the admin page where they can monitor the security roles on the site.

    - [ ] \(11/8/2021 of completion) Feature Title (Basic Roles implemented)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/admin/list_roles.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/24
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140791504-fcdfe6cf-e50b-41ad-a297-60a2c75f85d2.png)
            - This screenshot shows the admin view for the roles of the site. Also from this area the admin user can create roles or update features for the roles
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140795238-63f04d9e-5e2b-402c-9507-67e761c8f7ce.png)
            - This screenshot shows the user roles table containing the admin role set to the value of 1
        - Screenshot #3 
           - ![image](https://user-images.githubusercontent.com/89932304/140795377-6a942808-1f21-42c5-b871-6f490993bb25.png)
            - This screenshot shows the entire table containing the users, with the admin user having a filter of 1


    - [ ] \(11/8/2021 of completion) Feature Title (Site should have basic styles/theme applied; everything should be styled)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/login.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/23
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140797927-a2e96124-ccff-44ba-8986-d2ed339da9b7.png)
            - This screenshot shows the styling that I applied to the page, such as the coloring and margins for the text input areas.

    - [ ] \(11/8/2021 of completion) Feature Title (Any output messages/errors should be “user friendly”)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/login.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/11
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140798534-99b21a74-1692-44d2-ba6c-15ceacf6df0f.png)
            - This screenshot shows an example of an error message that gets displayed if the user makes an error while trying to access the site

    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to see their profile)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/profile.php
        - Pull Requests
        - PR link #1 https://github.com/EllisBallard1/IT202-001/pull/25
        - PR link #2 https://github.com/EllisBallard1/IT202-001/pull/24
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140798763-92d5055e-8fa6-4487-9dc9-69d47e541c3f.png)
            - This screenshow shows the page that allows the user to view their profile and update their password if they want
            
    - [ ] \(11/8/2021 of completion) Feature Title (User will be able to edit their profile)
    -  List of Evidence of Feature Completion
        - Status: (Completed)
        - Direct Link: https://eab4-prod.herokuapp.com/Project/profile.php
        - Pull Requests
        - PR link #1 (repeat as necessary)
        - Screenshots
        - Screenshot #1 
          - ![image](https://user-images.githubusercontent.com/89932304/140799093-e3f0ae24-22a3-4d3b-a6fa-d4ead0fdc7ce.png)
            - This screenshot shows the confirmation message when the user updates their password for accessing the database.
        - Screenshot #2 
          - ![image](https://user-images.githubusercontent.com/89932304/140799459-60d8790e-11cb-4763-b703-735b851e927d.png)
            - This screenshot shows the message that appears when the user attmepts to update their email to one that is already in use.

- Milestone 2

<table><tr><td>milestone 2</td></tr><tr><td><table><tr><td>F1 - Create Accounts table (2021-11-22)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/login.php](https://eab4-prod.herokuapp.com/Project/login.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/55](https://github.com/EllisBallard1/IT202-001/pull/55)</p></td></tr><tr><td><table><tr><td>F1 - Accounts table<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144886286-dd80dd08-b270-4338-b628-db07117bc068.png"><p>This screenshot shows the accounts table successfully created, as well as the first user that was able to register an account. The table is properly labeled and all the values are set to their defaults if not given a value yet.</td></tr></td></tr></table></td></tr><table><tr><td>F2 - Project setup steps and world account (2021-11-22)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/accounts.php](https://eab4-prod.herokuapp.com/Project/accounts.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/55](https://github.com/EllisBallard1/IT202-001/pull/55)</p></td></tr><tr><td><table><tr><td>F2 - Accounts table "world" account<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144886286-dd80dd08-b270-4338-b628-db07117bc068.png"><p>This screenshot shows the "world" account as well as the system user account. There are default values in place for the "world" account with the account number being "000000000000" as per the requirements and the user_id being the id of the system user.
</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144887600-7085fcbc-3678-4c66-a176-ff083055df20.png"><p>This screenshot shows the mySQL file that creates the system account if it does not already exist.</td></tr></td></tr></table></td></tr><table><tr><td>F3 - Create Transactions table (2021-11-22)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/home.php](https://eab4-prod.herokuapp.com/Project/home.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/56](https://github.com/EllisBallard1/IT202-001/pull/56)</p></td></tr><tr><td><table><tr><td>F3 - Transaction table<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144888113-1439fe67-e2ae-4fa8-aca9-41b38218d0d2.png"><p>This screenshot shows the successfully created Transactions table generated in by the database. The table contains the columns as defined in the example provided for the assignment. Right now there are no entries in this table, but once they are entered they will properly be saved and given their unique id numbers.</td></tr></td></tr></table></td></tr><table><tr><td>F4 - Dashboard Page (2021-11-22)</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/dashboard.php](https://eab4-prod.herokuapp.com/Project/dashboard.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/57](https://github.com/EllisBallard1/IT202-001/pull/57)</p></td></tr><tr><td><table><tr><td>F4 - Contains proper links for Create Account, My Accounts, Deposit, Withdraw, Transfer, and Profile<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144888852-54f47058-b39c-45d7-a210-36067b07d220.png"><p>This screenshot shows the dashboard page containing the links to the different areas of the site where the user can utilize features of their account. </td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144889057-672f0463-3585-421a-8181-86c067f644f8.png"><p>This screenshot shows the "#" in the URL when the user clicks a link that has not been associated with a page yet. </td></tr></td></tr></table></td></tr><table><tr><td>F5 - Users will be able to create a checking account ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/account_creation.php](https://eab4-prod.herokuapp.com/Project/account_creation.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/60](https://github.com/EllisBallard1/IT202-001/pull/60)</p></td></tr><tr><td><table><tr><td>F5 - System will generate a 12 digit unique account id number<tr><td>Status: pending</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144889702-79109cda-9bed-4a8a-957d-0f887dda8d63.png"><p>This screenshot shows the first user to create an account on the site. The column labeled account_num is the 12 digits unique number generated for each user's account. In this case, I used a function to find the last inserted id and pad this number with 0's. I might change the 0's to something like a randomly generated string of characters/numbers to make it more secure/unique. But as of right now each of these id numbers will be unique since the user's id is unique to them when generated by the database. </td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - System will associate the account with the user<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144889702-79109cda-9bed-4a8a-957d-0f887dda8d63.png"><p>This screenshot shows that the user's id number is associated with the account table when they create a new account. This is the association between the user and their account whenever it is referenced.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - Account type will be set to checking<tr><td>Status: completed</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144889702-79109cda-9bed-4a8a-957d-0f887dda8d63.png"><p>This screenshot (I apologize for using the same one repetitively) shows the account type set as checking.</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144890769-dd28ba1a-2ee6-4601-85ff-ec638a634888.png"><p>This screenshot shows my function definition for creating an account. By default, I set the type of account to checking, so that if the user does not choose an account type it will default to checking, and if they choose another option it should not cause issues when creating a savings account for example.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - Will require a minimum deposit of $5 (from world account)<tr><td>Status: in-progress</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144891574-574e3822-c074-4724-b800-faf31f3d3eec.png"><p>This screenshot shows the account creation page. When the user attempts to input a number into the initial deposit field, the browser will automatically force the default to be $5 while also allowing the user to use increments of .01 to account for pennies and change.</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144891771-fc02aaa3-74f7-49ab-b23e-92690030e84f.png"><p>This screenshot shows the user's account once it has been created. This is the section that is still in progress, as I have not yet added the functionality to insert their initial deposit into their account. I am also having an issue understanding the implementation of the "world" account in this scenario. So as of right now, the user can create their account but the balance will not be recorded.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - User-friendly error/success message<tr><td>Status: in-progress</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144892551-2d9f6ac2-1f7e-4477-923a-6624be757ce2.png"><p>As of right now, the flash messages are not displaying to the user when they are successful/unsuccessful, but this screenshot shows the successful creation of the accounts when the user selects their options.</td></tr></td></tr></table></td></tr><table><tr><td>F6 - User can list their accounts (2021-11-29)</td></tr><tr><td>Status: incomplete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/accounts.php](https://eab4-prod.herokuapp.com/Project/accounts.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/60](https://github.com/EllisBallard1/IT202-001/pull/60)</p></td></tr><tr><td><table><tr><td>F6 - Account listing (show only 5 for now)<tr><td>Status: in-progress</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144893039-2119c346-59ca-4184-ae85-3ea52bb51b58.png"><p>This screenshot shows the user's accounts page, where they are able to view all of the accounts they have created. Right now there are placeholders for the different information that I will populate later with the actual user's information. I need to query for the user's account information and limit the results to only show 5.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F6 - Show account number, account type and balance<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p>As I explained above, there are only placeholders where the proper information should be right now just to demonstrate that the page is set up properly to display the information.</td></tr></td></tr></table></td></tr><table><tr><td>F7 - Transaction history page (2021-12-05)</td></tr><tr><td>Status: incomplete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/accounts.php](https://eab4-prod.herokuapp.com/Project/accounts.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/EllisBallard1/IT202-001/pull/60](https://github.com/EllisBallard1/IT202-001/pull/60)</p></td></tr><tr><td><table><tr><td>F7 - Show account number, account type, balance, opened/created date<tr><td>Status: in-progress</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144893815-ef773308-9917-42ad-b425-690d5385fab0.png"><p>This screenshot shows my make_transaction function that handles the interactions between accounts. I have not yet implemented the function to the project, but it is meant to properly update the information in each account when a transaction is made and then update the transactions table.</td></tr><tr><td><img width="600px" src="https://user-images.githubusercontent.com/89932304/144893872-81117bf4-231b-4060-9823-79485c7aacdd.png"><p>This screenshot shows the rest of my make_transactions function. I will be creating a displayed version of this transaction page for the user based on their account number to show all transactions associated with their account.</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F7 - Show transaction history<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p>I have not yet implemented my transaction function to show the user their account's transaction history. This is the next step in my project.</td></tr></td></tr></table></td></tr><table><tr><td>F8 - User will be able to deposit/withdraw from their account(s) ()</td></tr><tr><td>Status: incomplete</td></tr><tr><td>Links:<p>

 [https://eab4-prod.herokuapp.com/Project/dashboard.php](https://eab4-prod.herokuapp.com/Project/dashboard.php)</p></td></tr><tr><td>PRs:<p>

 [![image](https://user-images.githubusercontent.com/89932304/144894555-23ffaf70-c09d-4d85-ab10-98e398e1bc01.png)](![image](https://user-images.githubusercontent.com/89932304/144894555-23ffaf70-c09d-4d85-ab10-98e398e1bc01.png))</p></td></tr><tr><td><table><tr><td>F8 - Form should have a dropdown of their accounts to pick from<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Form should have a field to enter a positive numeric value<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - For withdraw, add a check to make sure they can’t withdraw more money than the account has<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Form should allow the user to record a memo for the transaction<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Each transaction is recorded as a transaction pair in the Transaction table per the details below<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show appropriate user-friendly error messages<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F8 - Show user-friendly success messages<tr><td>Status: incomplete</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr></td></tr></table>

- Milestone 3
- [ ] \(mm/dd/yyyy of completion) Feature Title (User will be able to transfer between their accounts)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title (Transaction History page)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title (User’s profile page should record/show First and Last name)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- [ ] \(mm/dd/yyyy of completion) Feature Title (User will be able to transfer funds to another user’s account)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show

- Milestone 4
 <table><tr><td>milestone 4</td></tr><tr><td><table><tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F1 - If public, hide email address from other users<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F2 - User will be able open a savings account ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F2 - System will generate a 12 digit/character account number per the existing rules<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - System will associate the account to the user<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - Account type will be set as savings<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - Will require a minimum deposit of $5 (from the world account)<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - System sets an APY that’ll be used to calculate monthly interest based on the balance of the account<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will see user-friendly error messages when appropriate<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - User will see user-friendly success message when account is created successfully<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F3 - User will be able to take out a loan ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F3 - System will generate a 12 digit/character account number per the existing rules<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - Account type will be set as loan<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - Will require a minimum value of $500<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - System will show an APY (before the user submits the form)<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - Form will have a dropdown of the user’s accounts of which to deposit the money into<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - Special Case for Loans:<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - User will see user-friendly error messages when appropriate<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - User will see user-friendly success message when account is created successfully<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F4 - Listing accounts and/or viewing Account Details should show any applicable APY or “-” if none is set for the particular account (may alternatively just hide the display for these types) ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F4 - item 1<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F5 - User will be able to close an account ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F5 - User must transfer or withdraw all funds out of the account before doing so<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - Account should have a column “active” that will get set as false.<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - Closed accounts don’t show up anymore<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F5 - If the account is a loan, it must be paid off in full first<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><table><tr><td>F6 - Admin role (leave this section for last) ()</td></tr><tr><td>Status: pending</td></tr><tr><td>Links:</td></tr><tr><td>PRs:</td></tr><tr><td><table><tr><td>F6 - Will be able to search for users by firstname and/or lastname<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F6 - Will be able to look-up specific account numbers (partial match).<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F6 - Will be able to see the transaction history of an account<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F6 - Will be able to freeze an account (this is similar to disable/delete but it’s a different column)<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F6 - Will be able to open accounts for specific users<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F6 - Will be able to deactivate a user<tr><td>Status: pending</td></tr><tr><td><img width="600px" src=""><p></td></tr></td></tr></table></td></tr></td></tr></table>
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
