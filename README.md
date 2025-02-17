# Term Search Project

This is an extremely rough and ready laravel project that has been created to provide a basic bit of UI to support a small coding challenge. I apologise for the slightly rough and ready nature of it, but the flipside is that it provides you with a lot of flexibility to consider how you want to approach the problem.

## Introduction

When recording diagnoses for patients, clinicians will typically pick from a short list, or will carry out a search to look for the diagnosis they want to record.

This project simulates this with a very basic Laravel application that has a Disorder model that simply contains the SNOMED code and the term for a couple of disorders. The index page provides an off the shelf search component that will perform an ajax search against this model.

## The problem

Clinical terms are typically maintained in systems known as terminology services. A number of different implementations exist, all offering slightly different APIs. Currently OpenEyes maintains an internal list which users search against, but there is a desire to remove the need to maintain this internal list. Instead we want to be able to search against a 3rd party service through their API.

To achieve this, OpenEyes would need to provide a search endpoint that acts as an abstraction layer against whichever API endpoint has been made available for a given deployment.

## Scope

The front end of this project is not relevant beyond simple demonstration of being able to perform a search. There's no value in making it pretty, and we are not concerned about configuration of the endpoint it is using.

The backend is what we particularly care about. There are a number of areas that are interesting and provide ample opportunity for you to demonstrate your skills.
1. Testing.
1. Abstraction layers for the API
1. Configuration for deployment
1. Documentation
1. Research regarding available terminology services
1. Performance optimisation

## Focus

We don't expect you to spend days on this. We simply wanted to provide a defined problem space for you to work in, and provide a project around which we can have a follow up discussion. We'd recommend you thinking about 1 or 2 areas, and doing some work in that area. 

We are interested in your ability to articulate and describe your approaches as much as the actual implementation. We do expect to see code in your submission, but descriptions of how you would take it forward are also of value.

## Getting started

This project was set up using Laravel Herd on [Laravel 11](https://laravel.com/docs). But you should be able to leverage the Laravel documentation to get started pretty readily.

Once you have cloned it, you can run

```
composer install
npm install
composer run dev
php artisan make:fresh --seed
```

## FAQ

See [here](./FAQ.md)