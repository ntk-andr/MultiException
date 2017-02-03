# MultiException

## Usage Example

```php
use NtkAndr\MultiException;

function checkPassword($passwd): bool
{
    $errors = new MultiException();
    if (empty($passwd)) {
        $errors->add(new Exception('Empty password'));
    }
    if (strlen($passwd) < 6) {
        $errors->add(new Exception('The password is too short'));
    }
    if (!preg_match('~\d~', $passwd)) {
        $errors->add(new Exception('The password doesn\'t contain numbers'));
    }
    if (!$errors->isEmpty()) {
        throw $errors;
    }
    return true;
}

try {
    checkPassword('');
} catch (MultiException $errors) {
    foreach ($errors as $error) {
        echo $error->getMessage() . "\n";
    }
}
```