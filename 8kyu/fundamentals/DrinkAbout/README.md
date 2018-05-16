# Description:
* Kids drink toddy.
* Teens drink coke.
* Young adults drink beer.
* Adults drink whisky.


Make a function that receive age, and return what they drink.

Rules:

* Children under 14 old.
* Teens under 18 old.
* Young under 21 old.
* Adults have 21 or more.


Examples:

```
people_with_age_drink(13); // => "drink toddy"
people_with_age_drink(17); // => "drink coke"
people_with_age_drink(18); // => "drink beer"
people_with_age_drink(20); // => "drink beer"
people_with_age_drink(30); // => "drink whisky"
```

這題條件是

14歲以下不包含14歲drink toddy
14歲以上包含14歲，18歲以下不包含18歲drink coke
18歲以上包含18歲，21歲以下不包含21歲drink beer
21歲以上包含21歲drink whisky