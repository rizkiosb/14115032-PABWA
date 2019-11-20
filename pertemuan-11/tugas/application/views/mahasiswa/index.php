<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?php base_url(); ?>Mahasiswa" class=" btn btn-primary">Tambah data mahasiswa</a>
		</div>
	</div>
	<div class="container mt-4">
		<?php if ($this->session->flashdata('success')) { ?>
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data mahasiswa<strong>berhasil </strong><?php echo $this->session->flashdata('success') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		<?php } elseif ($this->session->flashdata('gagal')) { ?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data mahasiswa <strong>berhasil</strong><?php echo $this->session->flashdata('gagal') ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

		<?php } ?>
	</div>
	<div class="col-md-6">
		<div style="padding-top:30px;">
			<h3>Data Mahasiswa</h3>
			<ul class="list-group">
				<?php
				foreach ($mahasiswa as $mhs) {
					?>
					<li class="list-group-item">
						<?= $mhs['Nama']; ?>
						<a href="<?= base_url(); ?>Home/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('anda yakin ingin menghapus?');">Hapus</a>
					</li>

				<?php } ?>
			</ul>
		</div>
	</div>
</div>