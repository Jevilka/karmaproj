<?php include 'includes/header.php'; ?>
<h2>Портфолио</h2>
<div class="row">
    <?php include 'data/projects.php'; ?>
    <?php foreach ($projects as $project): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="images/<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $project['title']; ?></h5>
                    <p class="card-text"><?php echo $project['description']; ?></p>
                    <a href="#" class="btn btn-primary">Открыть</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'includes/footer.php'; ?>
