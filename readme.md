# About this Tech Task

This is a Symfony 5 project, coded on a mac with PHP 8.1.6.  The standalone symfony 
server on port 8000 was used to test the api.

Use `symfony server:start` to start the server.

The following requests were tested and the JSON output verified.

Request (all of these are  *GET*)

**Circle**

`localhost:8000/circle/22`

Output: -
```
{
	"type2": "circle",
	"radius": 22,
	"diameter": 44,
	"surface": 62.83185307179586,
	"circumference": 138.23007675795088
}
```

**Triangle**

`localhost:8000/triangle/22/21/19`

Output: -
```
{
"type": "triangle",
"a": 22,
"b": 21,
"c": 19,
"surface": 182.97540818372286,
"circumference(perimiter)": 62
}
```

**Geometry**

The `/geometry` endpoint is just to demonstrate summing areas and diameters - with a circle and triangle 
shape types in this example.  Four parameters were required (radius and three sides of the triangle)
But other combinations would be possible but a neater solution would be needed in order to pass 
in shape types as a parameter.

**Note**: The task specified that diameters (not circumferences or perimeters) were to be summed, 
so I only sum circles in the method.

`localhost:8000/geometry/circle/triangle/10/22/21/19`

Output: -
```
{
"type1": "circle",
"type2": "triangle",
"area": 182.97540818372286,
"diameter": 20
}
```
