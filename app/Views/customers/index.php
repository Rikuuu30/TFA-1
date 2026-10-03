<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="directory-header shell">
    <div>
        <span class="eyebrow">Account directory</span>
        <h1>Customer accounts</h1>
        <p>Contact details, training interests and purchase history for the people behind every sale.</p>
    </div>
    <div class="record-count"><span>Directory total</span><strong><?= count($customers) ?> members</strong></div>
</section>

<section class="shell directory-summary" aria-label="Customer account summary">
    <article><span>Active members</span><strong>5</strong><small>83% of listed accounts</small></article>
    <article><span>Customer value</span><strong>₱166,110</strong><small>Combined lifetime spend</small></article>
    <article><span>Repeat purchases</span><strong>62</strong><small>Orders across all members</small></article>
    <article><span>Top discipline</span><strong>Striking</strong><small>Boxing and Muay Thai</small></article>
</section>

<section class="shell directory-panel" data-directory>
    <div class="table-toolbar">
        <label class="search-field">
            <span class="sr-only">Search customers</span>
            <span aria-hidden="true">⌕</span>
            <input type="search" placeholder="Search name, contact, discipline or tier…" data-table-search autocomplete="off">
        </label>
        <p data-results-label>Showing all <?= count($customers) ?> customers</p>
    </div>

    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Discipline</th>
                    <th scope="col">Member tier</th>
                    <th scope="col">Order history</th>
                    <th scope="col">Lifetime value</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr data-table-row>
                    <td data-label="Customer">
                        <div class="identity-cell">
                            <span class="avatar"><?= esc(strtoupper(substr($customer['full_name'], 0, 1))) ?></span>
                            <span><strong><?= esc($customer['full_name']) ?></strong><small>Since <?= esc($customer['joined']) ?></small></span>
                        </div>
                    </td>
                    <td data-label="Contact"><div class="stacked-cell"><a href="mailto:<?= esc($customer['email'], 'attr') ?>"><?= esc($customer['email']) ?></a><a href="tel:<?= esc(preg_replace('/[^+\d]/', '', $customer['phone']), 'attr') ?>"><?= esc($customer['phone']) ?></a></div></td>
                    <td data-label="Discipline"><span class="discipline-tag"><?= esc($customer['style']) ?></span></td>
                    <td data-label="Member tier"><span class="tier-tag <?= strtolower($customer['tier']) ?>"><?= esc($customer['tier']) ?></span></td>
                    <td data-label="Order history"><div class="stacked-cell"><strong><?= esc((string) $customer['orders']) ?> orders</strong><small>Last: <?= esc($customer['last_order']) ?></small></div></td>
                    <td data-label="Lifetime value"><strong class="money-value"><?= esc($customer['spent']) ?></strong></td>
                    <td data-label="Status"><span class="status-pill <?= strtolower($customer['status']) ?>"><i aria-hidden="true"></i><?= esc($customer['status']) ?></span></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="empty-state" data-empty-state hidden>
        <strong>No customers found</strong>
        <p>Try another name, contact detail, discipline or member tier.</p>
    </div>
</section>
<?= $this->endSection() ?>
