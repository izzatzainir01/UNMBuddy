# Git Guidelines
This is a guideline for the usage of Git, mainly tailored to using it for UNMBuddy. This guideline includes general rules for our workflow, YouTube tutorial links, steps for common situations that we may encounter, and others. Keep in mind, many of these are covered in the videos linked.

[Main UNMBuddy GitHub Repository](https://github.com/izzatzainir01/UNMBuddy "Main UNMBuddy GitHub Repository")

## General Rule(s)
- **IMPORTANT**: NEVER make changes to the Main UNMBuddy Repo. Always make changes to your forked repo and create a Pull Request. More on this later.
- When a Pull Request is made, DO NOT merge it with the main branch immediately. Make sure that everyone involved reviews it first.

## YouTube tutorials
1. [Git and GitHub Tutorial For Beginners](https://www.youtube.com/watch?v=3fUbBnN_H2c "Git and GitHub Tutorial For Beginners"). This should cover most of the basics, but feel free to search up other tutorials on YouTube if it doesn't have something you're looking for.
2. [Forking repos and creating Pull Requests](https://www.youtube.com/watch?v=8A4TsoXJOs8 "Forking repos and creating Pull Requests"). **VERY IMPORTANT.** Some steps in this video could be simplified, specifically when syncing your forked repo with the main repo when there's changes made to the main repo. This will be covered somewhere below.

## General workflow
### First time setup
1. Make sure you can connect your local repo to your GitHub repo via SSH keys. This is covered in the first video linked. Play around with this using a dummy project first so you don't affect the Main UNMBuddy Repo.
2. Fork the Main UNMBuddy Repo on GitHub and clone your forked repo into your computer. This is covered in the second video linked.

### Making changes
The steps here are covered in the second video linked.
1. **ALWAYS** create a new branch first when making changes and name the branch something that describes the changes you're making. For example, `feature-add-submission` or `bugfix-login-error` or something similar.
2. Make your changes in that branch and commit them. You may make multiple commits before deciding to push it.
3. After you're satisfied with the changes you made, push that branch to your **forked GitHub repo** via `git push origin branch-name`. This will create a new branch on your forked GitHub repo with the same name and you can see the commit(s) you've made.
4. On GitHub, create a Pull Request and compare the Main UNMBuddy Repo's main branch to the new branch that you just pushed. This will open a Pull Request on the Main Repo that everyone can see, review and give comments.
5. Everyone involved must review the Pull Request and give comments if necessary.
6. If changes need to be made, you can still make changes on your local repo and push it. The new changes will show up in the Pull Request, so you don't have to make a new one.
7. When everyone involved approves of the changes made, you may merge the Pull Request.

### Syncing your forked repo with the Main Repo
This is for when changes have been made to the Main Repo and you wanna sync those changes with your forked repo.
1. On GitHub on your forked repo, there should be a button that says `Fetch upstream` right below the green `Code` button. Click on that button and then click on `Fetch and merge`.
2. On your local repo, do a `git pull` to pull the updated main branch on your forked repo into your local repo. This should update your local repo to include any changes made in the Main Repo.

### Oh no, there's a conflict!
This is for when there's changes made to Main Repo that conflicts with changes you've made in your local repo.
1. Idk how to deal with conflicts either so if there's conflicts, just let the group know and we'll try to figure it out together. We'll learn over time how to deal with conflicts without consulting each other too much.
