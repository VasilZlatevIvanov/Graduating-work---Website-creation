<?php if (!defined('IN_PHPBB')) exit; ?>Subject: phpBB инсталиран

Поздравления,

Вие успешно инсталирахте phpBB на вашият сървър.

Съобщението съдържа важна информация за форума. Паролата е криптирана в базата данни и не може да бъде възстановена, докато не поискате нова.

----------------------------
Потребителско име: <?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>

Адрес на форума: <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>
----------------------------

Полезна информация за форума може да бъде намерена на - http://www.phpbb.com/support/ или в документацията.


<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>