<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
        <div class="mdl-card__supporting-text color--dark-gray">
        <?=form_open('dashboard/register/')?>
        <form action="#"> 
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <span class="mdl-card__title-text text-color--smooth-gray">DARKBOARD</span>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <span class="login-name text-color--white">Sign up</span>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input name="name" class="mdl-textfield__input" type="text" id="name">
                        <label class="mdl-textfield__label" for="name">Name</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input name="password" class="mdl-textfield__input" type="password" id="password">
                        <label class="mdl-textfield__label" for="password">Password</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input name="email" class="mdl-textfield__input" type="email" id="e-mail">
                        <label class="mdl-textfield__label" for="e-mail">Email</label>
                    </div>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect checkbox--colored-light-blue checkbox--inline" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>

                    </label>
                    <span class="login-link">I agree all statements in <a href="#" class="underlined">terms of service</a></span>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                    <a href="login.html" class="login-link">I have already signed up</a>
                    <div class="mdl-layout-spacer"></div>
                    <a href="index.html">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                            SIGN UP
                        </button>
                    </a>
                </div>
            </div>
        </form>
        <?=form_close()?>
        </div>
    </div>
    </main>
</div>