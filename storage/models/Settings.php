<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Eloquent class to describe the settings table
*
*/
class Settings extends Model
{
    protected $table = 'settings';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('sitename', 'siteurl', 'copyright', 'version', 'loginbox', 'newsbox', 'newstoshow',
        'helpbox', 'perpage', 'moneyformat', 'moneydecimals', 'moneysymbol', 'currency', 'adminmail', 'banners', 'newsletter',
        'logo', 'timecorrection', 'cron', 'archiveafter', 'datesformat', 'errortext', 'picturesgallery', 'maxpictures',
        'buy_now', 'thumb_show', 'thumb_list', 'lastitemsnumber', 'hotitemsnumber', 'endingsoonnumber', 'boards', 'wordsfilter',
        'aboutus', 'aboutustext', 'terms', 'termstext', 'privacypolicy', 'privacypolicytext', 'defaultcountry',
        'defaultlanguage', 'catsorting', 'usersauth', 'descriptiontag', 'keywordstag', 'maxuploadsize', 'contactseller',
        'theme', 'catstoshow', 'bn_only', 'users_email', 'boardsmsgs', 'activationtype', 'https', 'https_url',
        'bn_only_disable', 'bn_only_percent', 'buyerprivacy', 'cust_increment', 'subtitle', 'extra_cat', 'fees', 'fee_type',
        'fee_max_debt', 'fee_signup_bonus', 'fee_disable_acc', 'tax', 'taxuser', 'ae_status', 'ae_timebefore', 'ae_extend',
        'cache_theme', 'hours_countdown', 'edit_starttime', 'banner_width', 'banner_height', 'counter_auctions',
        'counter_users', 'counter_online', 'banemail', 'mandatory_fields', 'displayed_feilds', 'ao_hpf_enabled',
        'ao_hi_enabled', 'ao_bi_enabled', 'proxy_bidding', 'recaptcha_public', 'recaptcha_private', 'spam_sendtofriend',
        'spam_register', 'mod_queue', 'payment_options', 'autorelist', 'autorelist_max', 'invoice_yellow_line',
        'invoice_thankyou');

}

