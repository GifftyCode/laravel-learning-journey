<div>
    <!-- Because we are nott using the call back function on the contact us route, we can't detach the route parameters directly without using the Request method as seen: -->
    <h2>Contact Us!</h2>
    <div>
    <h2>Name: {{request() -> name}}</h2>
    <h2>ID: {{request() -> id}}</h2>
    </div>
</div>
