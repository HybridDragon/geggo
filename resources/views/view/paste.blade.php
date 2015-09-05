@extends('layouts.main')

@section('content')
	<code>
package main

import "fmt"
import "os"

func main() {
    if os.Args[1] != "" { // check to see if name is specified
        var name string = os.Args[1] // get name as a command line argument
        fmt.Println("Hello, " + name + "!"); // prints "Hello, [name]!"
    } else { // throws the dummy before else gets run
        fmt.Println("Hello there, uhh, no-name.");
    }
}
	</code>
@stop
