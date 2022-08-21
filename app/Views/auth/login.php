<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.loginTitle')?></h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= url_to('login') ?>" method="post">
						            <?= csrf_field() ?>

                                    <form class="user">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login"
                                                placeholder="<?=lang('Auth.username')?>">
                                            <div class="invalid-feedback">
								            <?= session('errors.login') ?>
							                </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                name="login" placeholder="<?=lang('Auth.password')?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.password') ?>
                                                </div>
                                        </div>

                                        <?php if ($config->allowRemembering): ?>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="remember">
                                                <label class="custom-control-label" <?php if (old('remember')) : ?> checked <?php endif ?> for="customCheck"><?=lang('Auth.rememberMe')?> 
                                                </label>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?=lang('Auth.loginAction')?>
                                        </button>
                                    </form>
                                    <hr>
                                    <?php if ($config->activeResetter): ?>
                                                        <p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                                    <?php endif; ?>
                                    <?php if ($config->allowRegistration) : ?>
                                                        <p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
<?= $this->endSection(); ?>