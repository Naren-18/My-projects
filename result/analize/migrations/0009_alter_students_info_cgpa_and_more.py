# Generated by Django 4.0.1 on 2022-06-26 06:19

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('analize', '0008_students_info'),
    ]

    operations = [
        migrations.AlterField(
            model_name='students_info',
            name='CGPA',
            field=models.TextField(max_length=1000),
        ),
        migrations.AlterField(
            model_name='students_info',
            name='Failed_Subjects',
            field=models.TextField(max_length=1000),
        ),
        migrations.AlterField(
            model_name='students_info',
            name='Passed_Out_Year',
            field=models.TextField(max_length=1000),
        ),
        migrations.AlterField(
            model_name='students_info',
            name='Passed_Subjects',
            field=models.TextField(max_length=1000),
        ),
        migrations.AlterField(
            model_name='students_info',
            name='SGPA',
            field=models.TextField(max_length=1000),
        ),
        migrations.AlterField(
            model_name='students_info',
            name='Semester',
            field=models.TextField(max_length=1000),
        ),
    ]