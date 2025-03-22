The `review.patch` file is the patch file for `Review/Cart.php`. 
It contains the suggested reviews for the `Cart.php` file.

To create generate a new output file, run below command on the project root:

```bash
patch src/Review/Cart.php < vendor/patch/review.patch -o src/Review/ReviewedCart.php 
```
