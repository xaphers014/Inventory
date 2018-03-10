<div class="container">
    <article>
        <section>
            <div>
                <h3 class="subTitle">LOGIN</h3>
            </div>
        </section>
        <section>
            <form action="<?= base_url('site/login'); ?>" method="POST">
                <div class="">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <label>Not yet registered?</label><br/>
            <a href="<?= base_url("Main/registration"); ?>">	
                <button type="button" class="btn">Register Here!</button>
            </a>
        </section>
    </article>  
    
</div>